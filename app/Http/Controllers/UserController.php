<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function Login()
    {
        return view('login');
    }

    public function LoginPost(Request $request)
    {
        $user = User::where('email', $request->input('email'))
                    ->where('password', $request->input('password'))
                    ->where('role', 'user')
                    ->first();

        if($user === null)
        {
            return back()->with('status', 'Invalid login details');
        }

        Auth::login($user);
        return redirect()->route('user.dashboard');    
    }

    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' =>  $request->input('name'),
            'email' =>  $request->input('email'),
            'mobile' =>  $request->input('mobile'),
            'password' =>  $request->input('password'),
            'role' => 'user',
        ]);
        return redirect()->route('user.login');
    }

    public function Dashboard()
    {
        $doctors = Doctor::all();
        return view('patientshome', [
            'doctors' => $doctors
        ]);
    }

    public function TakeAppointment(Request $request)
    {
        Appointment::create([
            'user_id' => Auth::user()->id,
            'doctor_id' => $request->input('doctor'),
            'problem' => $request->input('problem')
        ]);
        return redirect()->route('user.appointments');
    }

    public function Appointments()
    {
        $appointments = Appointment::where('user_id', Auth::user()->id)->get();
        return view('myappointmets',[
            'appointments' => $appointments
        ]);
    }

}
