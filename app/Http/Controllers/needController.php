<?php

namespace App\Http\Controllers;

use App\Models\need;
use Illuminate\Http\Request;

class needController extends Controller
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
        return view('about.relations.create_need');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        need::insert([
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
        $need = need::where('id', $id)->first();
        return view('about.relations.edit_need',compact('need'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        need::where('id', $id)
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
        need::where('id', $id)->delete();
        return redirect('relations_manage');
    }
}
