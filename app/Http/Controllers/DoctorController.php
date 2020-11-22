<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    
    public function index()
    {
        $doctor = Doctor::latest()->get();

        return view('doctors.index', ['doctor' => $doctor]);
    }

    public function show($id)
    {
        $doctor = Doctor::find($id);

        return view('doctors.show', ['doctor' => $doctor]);
    }
}
