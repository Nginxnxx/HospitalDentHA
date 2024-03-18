<?php

namespace App\Http\Controllers;

use App\Models\vision;
use Illuminate\Http\Request;

class visionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vision=vision::all();
        return view('about.vision.index',compact('vision'));
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
        $vision = vision::where('id',$id)->first();
        // dd($menu);
        return view('about.vision.edit',compact('vision'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        vision::where('id',$id)->update([
            'name'=>$request->name,
            'detail'=>$request->detail,
        ]);
        return redirect('vision_menege');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
