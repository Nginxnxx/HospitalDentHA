<?php

namespace App\Http\Controllers;

use App\Models\competition;
use Illuminate\Http\Request;

class competitionController extends Controller
{
    /**
     * 
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
        competition::insert([
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
        $competition = competition::where('id', $id)->first();
        return view('about.environment.edit_competition',compact('competition'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        competition::where('id', $id)
        ->update([
        'detail' => $request->detail,
    ]);
    return redirect('environment_manage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        competition::where('id', $id)->delete();
        return redirect('environment_manage');
    }
}
