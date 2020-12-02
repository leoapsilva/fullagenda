<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    
    protected function validateDoctor()
    {
        return request()->validate([
            'name' => 'required',
            'lastname' => 'required',
            'mobile' => 'required|size:15|regex:/\(?\d{2}\)?\s?9\d{4}\-?\d{4}/',
            'specialty' => 'required',
        ]);
    }
    
    public function index()
    {
        return view('doctors.index');
    }

    public function create()
    {
        return view('doctors.create');
    }

    public function store()
    {
        Doctor::create($this->validateDoctor());

        return redirect('/doctors');
    }

    public function edit(Doctor $doctor)
    {
        return view('doctors.edit', [
            'doctor' => $doctor,
        ]);
    }

    public function show(Doctor $doctor)
    {
        return view('doctors.show', [
            'doctor' => $doctor,
        ]);
    }

    public function update(Doctor $doctor)
    {
        $doctor->update($this->validateDoctor());
        
        return redirect('/doctors');
    }

    public function delete(Doctor $doctor)
    {
        return view('doctors.delete', [
            'doctor' => $doctor,
        ]);
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        
        return redirect('/doctors');
    }

}
