<?php

namespace App\Http\Controllers;

use App\Models\general;
use App\Models\management;
use Illuminate\Http\Request;

class generalController extends Controller
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
        $source = request('source');
        // ตรวจสอบว่า source เป็นจากตาราง 'administer' หรือไม่
        if ($source === 'general') {
            $data = general::where('id', $id)->first();
        } elseif($source === 'management') {
            $data = management::where('id', $id)->first();
        }  
        else{
        }
        // dd($data);
        return view('home.edit_generalinfo', compact('data','source'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $source = $request->input('source');

    // ตรวจสอบค่า $source เพื่อดำเนินการต่อไป
    if ($source === 'general') {
        general::where('id',$id)->update([
            'nameTH'=>$request->nameTH,
            'nameEN'=>$request->nameTH,
            'address'=>$request->nameTH,
        ]);
    } elseif ($source === 'management') {
        management::where('id',$id)->update([
            'name'=>$request->name,
            'position'=>$request->position,
            'duty'=>$request->duty,
            'email'=>$request->email,
            'telephone'=>$request->telephone,
        ]);
    } 
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
