<?php

namespace App\Http\Controllers;

use App\Mail\UserSignUpMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function login_form(){
        return view('kullanici.oturumac');
    }

    public function login(){
        $this->validate(\request(), [
           'email' => 'required|email',
           'password' => 'required'
        ]);

        $credentials = [
            'email' => request('email'),
            'password' => request('password'),
            'active' => 1
        ];
        if (auth()->attempt($credentials, session()->has('remember_me')))
        {
            request()->session()->regenerate();
            return redirect()->intended('/');
        }else{
            $errors = ['email' => 'Hatalı giris'];
            return back()->withErrors($errors);
        }

    }

    public function signup_form(){
        return view('kullanici.kaydol');
    }

    public function signup(){

        $this->validate(request(), [
            'namesurname' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:5|max:20'
        ]);

        $user = User::create([
           'namesurname' => request('namesurname'),
           'email' => request('email'),
           'password' => Hash::make(request('password')),
           'activation_key' => Str::random(60),
            'active' => 0
        ]);

        Mail::to(request('email'))->send(new UserSignUpMail($user));

        auth()->login($user);

        return redirect()->route('main');
    }

    public function activate($key){

        $user = User::where('activation_key', $key)->first();

        if (!is_null($user)){
            $user->activation_key = null;
            $user->active = 1;
            $user->save();

            return redirect()->to('/')
                ->with('message', 'Your user registration has been activated.')
                ->with('message_type', 'success');
        }else{
            return redirect()->to('/')
                ->with('message', 'Your user registration has not been activated')
                ->with('message_type', 'warning');
        }
    }

    public function logout(){
        auth()->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('main');
    }
}
