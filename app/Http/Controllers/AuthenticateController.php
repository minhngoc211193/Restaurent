<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function loginIndex()
    {
        return view('login');
    }

    public function registerIndex()
    {
        return view('register');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
                // kiểm tra 
            return redirect('/foods');
        }
 
        return redirect('/login');
    }

    public function register(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'repassword' => 'required|same:password',
            'typeofuser' => 'required',
        ]);
        User::create($request->all());
        
        $credentials = $request->only('name', 'email', 'password',);
        auth()->attempt($credentials);
        return redirect('/foods');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
 
        return redirect('/login');
    }
   
}