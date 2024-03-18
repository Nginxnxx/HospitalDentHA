<?php

namespace App\Http\Controllers;

use App\Models\howtoservice;
use Illuminate\Http\Request;

class howtoserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return redirect('homeController');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $howtoservice = howtoservice::where('id', $id)->first();
        // dd($activitys);
        return view('home.service.edit_service', compact('howtoservice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        howtoservice::where('id', $id)
        ->update([
        'name' => $request->name,
        'detail' => $request->detail,
    ]);
    return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
