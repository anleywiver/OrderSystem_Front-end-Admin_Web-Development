<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'telpon' => $data['telpon'],
            'password' => Hash::make($data['password']),

        ]);
        // send email verification
        Mail::to($user->email)->send(new VerifyEmail($user));
        return redirect('/home');
    }


    public function verify()
    {
        if (empty(request('token'))) {
            // if token is not provided
            return redirect()->route('signup.form');
        }
        // decrypt token as email
        $decryptedEmail = Crypt::decrypt(request('token'));
        // find user by email
        $user = User::whereEmail($decryptedEmail)->first();
        if ($user->status == 'activated') {
            // user is already active, do something
        }
        // otherwise change user status to "activated"
        $user->status = 'activated';
        $user->save();
        // autologin
        Auth::loginUsingId($user->id);
        return redirect('/home');
    }
}
