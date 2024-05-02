<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User\User;
use App\Services\RailwayService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Log;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function redirect(string $provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback(string $provider)
    {
        $user = Socialite::driver($provider)->stateless()->user();

        return match ($provider) {
            'google' => $this->verifyUser($user, 'google'),
            'facebook' => $this->verifyUser($user, 'facebook'),
            'steam' => $this->verifyUser($user, 'steam'),
            'battlenet' => $this->verifyUser($user, 'battlenet'),
            'discord' => $this->verifyUser($user, 'discord'),
            'twitch' => $this->verifyUser($user, 'twitch'),
        };
    }

    private function verifyUser($user, string $provider)
    {
        $gUser = $user;
        $user = User::query()->where('email', $gUser->email)->first();
        if (! $user) {
            $user = User::query()->create([
                'name' => $gUser->name ?? $gUser->nickname,
                'email' => $gUser->email ?? generateReference(10).'@vst.local',
                'password' => \Hash::make('password0000'),
                'email_verified_at' => now(),
                'admin' => false,
                'uuid' => \Str::uuid(),
            ]);

            if (! $user->socials()->where('provider', $provider)->exists()) {
                $user->socials()->create([
                    'provider' => $provider,
                    'provider_id' => $gUser->id,
                    'avatar' => $gUser->avatar,
                    'user_id' => $user->id,
                ]);
            }

            return redirect()->route('auth.setup-register', [$provider, $user->email]);
        }

        \Auth::login($user);

        return redirect()->route('home');
    }

    public function setupAccount(string $provider, string $email)
    {
        return view('auth.setupView', compact('provider', 'email'));
    }

    /**
     * Submit method for setting up an account.
     *
     * @param \Illuminate\Http\Request $request The HTTP request object
     * @param string $provider The social media provider
     * @param string $email The user's email address
     *
     * @return \Illuminate\Http\RedirectResponse Redirects user to the home route
     */
    public function setupAccountSubmit(Request $request, string $provider, string $email)
    {
        $request->validate([
            'password' => 'required|min:8',
        ]);

        try {
            $user = User::where('email', $email)->firstOrFail();

            $user->update([
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);
            $user->logs()->create([
                'action' => "Connexion au service: Gestion de compte",
                'user_id' => $user->id,
            ]);
        } catch (Exception $exception) {
            Log::emergency($exception->getMessage(), [$exception]);
        }

        return redirect()->route('home');
    }

    public function logout()
    {
        \Auth::logout();
        \Session::flush();

        return redirect()->route('home');
    }

    public function confirmPasswordForm()
    {
        return view('auth.password');
    }

    public function confirmPassword(Request $request)
    {
        if (! \Hash::check($request->password, $request->user()->password)) {
            toastr()
                ->addError('Mot de passe erronée', "Vérification d'accès !");
        }

        $request->session()->passwordConfirmed();

        return redirect()->intended();
    }
}
