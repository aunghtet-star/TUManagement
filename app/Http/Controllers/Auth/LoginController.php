<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function teacherLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            try {
                $decryptedPassword = Crypt::decrypt($user->password);

                if ($request->password === $decryptedPassword) {
                    if ($user->role === '3') {
                        Auth::login($user); // Manually login the user
                        return redirect()->intended('/home');
                    } else {
                        return back()->withErrors(['email' => 'You are not authorized as a teacher.']);
                    }
                } else {
                    return back()->withErrors(['email' => 'Invalid credentials.']);
                }

            } catch (\Exception $e) {
                return back()->withErrors(['email' => 'Password decryption failed.']);
            }
        }

        return back()->withErrors(['email' => 'User not found.']);
    }

    public function studentLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            try {
                $decryptedPassword = Crypt::decrypt($user->password);

                if ($request->password === $decryptedPassword) {
                    if ($user->role === '2') {
                        Auth::login($user); // Manually login the user
                        return redirect()->intended('/home');
                    } else {
                        return back()->withErrors(['email' => 'You are not authorized as a student.']);
                    }
                } else {
                    return back()->withErrors(['email' => 'Invalid credentials.']);
                }

            } catch (\Exception $e) {
                return back()->withErrors(['email' => 'Password decryption failed.']);
            }
        }

        return back()->withErrors(['email' => 'User not found.']);
    }

    public function adminLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            try {
                $decryptedPassword = Crypt::decrypt($user->password);

                if ($request->password === $decryptedPassword) {
                    if ($user->role === '0') {
                        Auth::login($user); // Manually login the user
                        return redirect()->intended('/home');
                    } else {
                        return back()->withErrors(['email' => 'You are not authorized as a admin.']);
                    }
                } else {
                    return back()->withErrors(['email' => 'Invalid credentials.']);
                }

            } catch (\Exception $e) {
                return back()->withErrors(['email' => 'Password decryption failed.']);
            }
        }

        return back()->withErrors(['email' => 'User not found.']);
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
