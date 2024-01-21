<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    public function registrationIndex()
    {
        return view('registration');
    }

    public function loginIndex()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('userName', 'password');
        Log::info(json_encode($credentials));  
        if (Auth::attempt($credentials)) {
            return view('welcome', ["message" => "Sikeres belépés!"]);     
        } 
        else {
            return view('login', ["errorMessage" => "Sikertelen belépés, kérem próbálja újra!"]);
        }
    }

    public function registration(Request $request)
    {
        $request->validate([
            'userName' => ['required', 'string', 'max:255', 'unique:users'],
            'surName' => ['required', 'string', 'max:255'],
            'familyName' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:5'],
        ]);

        User::create([
            'userName' => $request->userName,
            'surName' => $request->surName,
            'familyName' => $request->familyName,
            'password' => Hash::make($request->password),
        ]);

        return view('login', ["message" => "Sikeres regisztráció, kérem lépjen be!"]);
    }

    public function logout(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return view('/login', ["message" => "Sikeresen kilépett!"]);
    }
}
