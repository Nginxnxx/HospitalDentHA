<?php

namespace App\Http\Controllers;

use App\Models\factor;
use App\Models\competition;
use App\Models\environment;
use Illuminate\Http\Request;

class environmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $environment = environment::all();
        $competition = competition::all();
        $factor = factor::all();
        return view('about.environment.index' ,compact('environment','competition', 'factor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('about.environment.create_growth');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        environment::insert([
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
        $environment = environment::where('id', $id)->first();
        return view('about.environment.edit_growth', compact('environment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          environment::where('id', $id)
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
        environment::where('id', $id)->delete();
        return redirect('environment_manage');
    }
}
