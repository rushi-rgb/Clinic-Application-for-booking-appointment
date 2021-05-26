<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function AdminLogin()
    {
        return view('loginclinic');
    }

    public function AdminLoginPost(Request $request)
    {
        $user = User::where('email', $request->input('email'))
                    ->where('password', $request->input('password'))
                    ->where('role', 'admin')
                    ->first();

        if($user === null)
        {
            return back()->with('status', 'Invalid login details');
        }

        Auth::login($user);
        return redirect()->route('admin'); 
    }

    public function admin()
    {
        $doctors = User::where('role', 'doctor')->get();
        return view('clinicadmin', [
            'doctors' => $doctors
        ]);
    }

    public function Logout()
    {
        auth()->logout();
        return redirect()->route('home');
    }
}
