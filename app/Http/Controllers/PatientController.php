<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    protected function validatePatient()
    {
        return request()->validate([
            'name' => 'required',
            'lastname' => 'required',
            'mobile' => 'required|size:15|regex:/\(?\d{2}\)?\s?9\d{4}\-?\d{4}/',
            'birthday' => 'required',
            'health_insurance_plan' => 'required'
        ]);
    }
    public function index()
    {
        return view('patients.index');
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store()
    {
        Patient::create($this->validatePatient());

        return redirect('/patients');
    }

    public function edit(Patient $patient)
    {
        return view('patients.edit', [
            'patient' => $patient,
        ]);
    }

    public function show(Patient $patient)
    {
        return view('patients.show', [
            'patient' => $patient,
        ]);
    }

    public function update(Patient $patient)
    {
        $patient->update($this->validatePatient());
        
        return redirect('/patients');
    }

    public function delete(Patient $patient)
    {
        return view('patients.delete', [
            'patient' => $patient,
        ]);
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();
        
        return redirect('/patients');
    }
}
