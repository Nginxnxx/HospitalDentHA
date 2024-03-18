<?php

namespace App\Http\Controllers;

use App\Models\patient;
use Illuminate\Http\Request;

class patientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return redirect('relationsController');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('about.relations.create_patient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        patient::insert([
            'name' => $request->name,
            'detail' => $request->detail,
        ]);
         return redirect('relations_manage');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $patient = patient::where('id', $id)->first();
        return view('about.relations.edit_patient',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        patient::where('id', $id)
        ->update([
        'name' => $request->name,
        'detail' => $request->detail,
    ]);
    return redirect('relations_manage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        patient::where('id', $id)->delete();
        return redirect('relations_manage');
    }
}
