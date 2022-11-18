<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Contracts\LoginResponse;
use App\Models\User;
use Stevebauman\Location\Facades\Location;
use Jenssegers\Agent\Facades\Agent;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->instance(LoginResponse::class, new class implements LoginResponse
        {
            public function toResponse($request)
            {
                $user = User::where('email', $request->email)->first();
                if ($user->role === "Admin") {
                    return redirect('/admin/dashboard');
                }
                return redirect('/user/dashboard');
            }
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        Fortify::loginView(function () {
            return view('auth.login');
        });

        Fortify::registerView(function () {
            return view('auth.register');
        });

        Fortify::requestPasswordResetLinkView(function () {
            return view('auth.forgot-password');
        });

        Fortify::resetPasswordView(function ($request) {
            return view('auth.reset-password', ['request' => $request]);
        });

        Fortify::verifyEmailView(function () {
            return view('auth.verify-email');
        });

        Fortify::confirmPasswordView(function () {
            return view('auth.confirm-password');
        });

        RateLimiter::for('login', function (Request $request) {
            $email = (string) $request->email;

            return Limit::perMinute(5)->by($email . $request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('email', $request->email)->first();
            if ($user && Hash::check($request->password, $user->password)) {
                $ip = request()->ip(); // client IP
                $currentUserInfo = Location::get($ip); // client country
                $device = Agent::device(); // client device
                if ($currentUserInfo) {
                    $user->update([
                        'ip' => $ip,
                        'country' => $currentUserInfo->countryName,
                        'device' => $device
                    ]);
                }
                return $user;
            } else {
                if (!$user) {
                    $request->session()->flash('email_invalid', 'Invalid Email, Please try again with other!');
                } else {
                    $request->session()->flash('password_invalid', 'Invalid Password, Please retype again!');
                }
                return false;
            }
        });
    }
}
