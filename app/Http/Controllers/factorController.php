<?php

namespace App\Http\Controllers;

use App\Models\factor;
use Illuminate\Http\Request;

class factorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return redirect('environmentController');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('about.environment.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        factor::insert([
            'name' => $request->name,
            'detail' => $request->detail,
        ]);
         return redirect('environment_manage');
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
        $factor = factor::where('id', $id)->first();
        return view('about.environment.edit_factor',compact('factor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        factor::where('id', $id)
        ->update([
        'name' => $request->name,
        'detail' => $request->detail,
    ]);
    return redirect('environment_manage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        factor::where('id', $id)->delete();
        return redirect('environment_manage');
    }
}
