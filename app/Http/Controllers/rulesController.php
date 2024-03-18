<?php

namespace App\Http\Controllers;

use App\Models\rules;
use Illuminate\Http\Request;

class rulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rules = rules::all();
        return view('about.rules.index',compact('rules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('about.rules.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        rules::insert([
            'name'=>$request->name,
            'link'=>$request->link,
        ]);
        return redirect('rules_menege');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rules = rules::where('id',$id)->first();
        // dd($menu);
        return view('about.rules.edit',compact('rules'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        rules::where('id',$id)->update([
            'name'=>$request->name,
            'link'=>$request->link,
        ]);
        return redirect('rules_menege');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $delete = rules::find($id)->delete();
        return redirect('rules_menege');
    }
}
