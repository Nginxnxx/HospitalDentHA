<?php

namespace App\Http\Controllers;

use App\Models\building;
use Illuminate\Http\Request;

class buildingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $building = building::all();
        return view('about.building.index',compact('building'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('about.building.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        building::insert([
            'name'=>$request->name,
            'detail'=>$request->detail,
        ]);
        return redirect('building_menege');
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
        $building = building::where('id',$id)->first();
        // dd($menu);
        return view('about.building.edit',compact('building'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        building::where('id',$id)->update([
            'name'=>$request->name,
            'detail'=>$request->detail,
        ]);
        return redirect('building_menege');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = building::find($id)->delete();
        return redirect('building_menege');
    }
}
