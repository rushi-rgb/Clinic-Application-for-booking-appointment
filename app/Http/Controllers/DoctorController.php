<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function create()
    {
        return view('adddoctor');
    }

    public function store(Request $request)
    {
        $user = User::create([
            'name' =>  $request->input('name'),
            'email' =>  $request->input('email'),
            'mobile' =>  $request->input('mobile'),
            'password' =>  $request->input('password'),
            'role' => 'doctor',
        ]);

        $user->doctor()->create([
            'Designation'=> $request->input('designation')
        ]);

        return redirect()->route('admin');
    }

    public function DoctorLogin()
    {
        return view('doctorlogin');
    }

    public function DoctorLoginPost(Request $request)
    {
        $user = User::where('email', $request->input('email'))
                    ->where('password', $request->input('password'))
                    ->where('role', 'doctor')
                    ->first();

        if($user === null)
        {
            return back()->with('status', 'Invalid login details');
        }

        Auth::login($user);
        return redirect()->route('doctor.dashboard'); 
    }

    public function dashboard()
    {
        $appointments = Appointment::where('doctor_id', Auth::user()->doctor->id)->get();
        return view('doctordashboard',[
            'appointments' => $appointments
        ]);
    }

    public function ConfirmAppointment(Request $request)
    {
        $appointment = Appointment::find($request->get('appointment_id'));
        $appointment->datetime = $request->get('datetime');
        $appointment->confirmed = true;
        $appointment->save();
        return redirect()->route('doctor.dashboard');
    }
}
