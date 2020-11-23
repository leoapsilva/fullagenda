<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\DataTables\DoctorDataTable;

class DoctorController extends Controller
{
    
    public function index(DoctorDataTable $dataTable)
    {
        return $dataTable->render('doctors.index');
    }

/* 
    public function index()
    {
        $doctor = Doctor::latest()->get();

        return view('doctors.index', ['doctor' => $doctor]);
    }

*/
    public function show($id)
    {
        $doctor = Doctor::find($id);

        return view('doctors.show', ['doctor' => $doctor]);
    }

    public function store(Request $request)
    {
        $doctor = Doctor::find($id);

        return view('doctors.show', ['doctor' => $doctor]);
    }


    public function create()
    {

    }

    public function destroy()
    {
        
    }

    public function edit()
    {
        
    }

    public function update()
    {
        
    }



}
