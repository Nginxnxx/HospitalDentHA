<?php

namespace App\Http\Controllers;

use App\Models\cooperation;
use App\Models\need;
use App\Models\patient;
use App\Models\services;
use App\Models\covenants;
use App\Models\deliverer;
use App\Models\governance;
use App\Models\outsourcing;
use App\Models\train;
use Illuminate\Http\Request;

class relationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $governance = governance::all();
        $need = need::all();
        $patient = patient::all();
        $service = services::all();
        $deliverer = deliverer::all();
        $outsourcing = outsourcing::all();
        $covenants = covenants::all();
        $cooperation = cooperation::all();
        $train = train::all();
        return view('about.relations.index', compact('governance','need','patient','service','deliverer','outsourcing','covenants','cooperation','train'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('about.relations.create_governance');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        governance::insert([
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
        $governance = governance::where('id', $id)->first();
        // dd($governance);
        return view('about.relations.edit_governance',compact('governance'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        governance::where('id', $id)
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
        governance::where('id', $id)->delete();
        return redirect('relations_manage');
    }
}
