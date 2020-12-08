<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Validation\Rule;

class AppointmentController extends Controller
{
    //

    protected function validateAppointmentUpdate()
    {
        return request()->validate([
            'appointed_to'=> ['required',
                                Rule::unique('appointments')->ignore(request('user_id'))
                                                            ->where('doctor_id', request('doctor_id'))
                                                            ->where('patient_id', request('patient_id'))
                             ],
            'patient_id'=> 'required',
            'doctor_id'=> 'required',
            'user_id'=> 'required',
        ]);
    }

    protected function validateAppointment()
    {
        return request()->validate([
            'appointed_to'=> ['required',
                                Rule::unique('appointments')->where('doctor_id', request('doctor_id'))
                                                            ->where('patient_id', request('patient_id'))
                             ],
            'patient_id'=> 'required',
            'doctor_id'=> 'required',
            'user_id'=> 'required',
        ]);
    }

    public function index()
    {
        return view('appointments.index');
    }

    public function create()
    {
        return view('appointments.create');
    }

    public function store()
    {
        Appointment::create($this->validateAppointment());

        return redirect('/appointments');
    }

    public function edit(Appointment $appointment)
    {
        return view('appointments.edit', [
            'appointment' => $appointment,
        ]);
    }

    public function show(Appointment $appointment)
    {
        return view('appointments.show', [
            'appointment' => $appointment,
        ]);
    }

    public function update(Appointment $appointment)
    {
        $appointment->update($this->validateAppointmentUpdate());
        
        return redirect('/appointments');
    }

    public function delete(Appointment $appointment)
    {
        return view('appointments.delete', [
            'appointment' => $appointment,
        ]);
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        
        return redirect('/appointments');
    }

}
