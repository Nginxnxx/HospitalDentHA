<?php

namespace App\Http\Controllers;

use App\Models\services;
use Illuminate\Http\Request;

class serviceController extends Controller
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
        return view('about.relations.create_service');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        services::insert([
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
        $service = services::where('id', $id)->first();
        return view('about.relations.edit_service',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        services::where('id', $id)
        ->update([
        'detail' => $request->detail,
    ]);
    return redirect('relations_manage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        services::where('id', $id)->delete();
        return redirect('relations_manage');
    }
}
