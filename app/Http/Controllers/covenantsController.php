<?php

namespace App\Http\Controllers;

use App\Models\train;
use App\Models\covenants;
use App\Models\cooperation;
use Illuminate\Http\Request;

class covenantsController extends Controller
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
        $source = request('source');
        if ($source === 'covenants' || $source === 'coop' || $source === 'train') {
            return view('about.relations.create_covenants', compact('source'));
        }
        else ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {       
        $source = request('source');
        if($source==='covenants'){
            covenants::insert([
                'detail'=>$request->detail,
            ]);
        }elseif($source==='coop'){
            cooperation::insert([
                'detail'=>$request->detail,
            ]);
        }elseif($source==='train'){
            train::insert([
                'detail'=>$request->detail,
            ]);     
        }
        else ;
        // dd( $source );
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
        $source = request('source');
        // ตรวจสอบว่า source เป็นจากตาราง 'administer' หรือไม่
        if ($source === 'covenants') {
            $data = covenants::where('id', $id)->first();
        } elseif($source === 'coop') {
            $data = cooperation::where('id', $id)->first();
        } elseif ($source === 'train') {
            $data = train::where('id', $id)->first();
        } 
        else{
        }
        // dd($data);
        return view('about.relations.edit_covenants', compact('data','source'));
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    $source = $request->input('source');

    // ตรวจสอบค่า $source เพื่อดำเนินการต่อไป
    if ($source === 'covenants') {
        covenants::where('id',$id)->update([
            'detail'=>$request->detail,
        ]);
    } elseif ($source === 'coop') {
        cooperation::where('id',$id)->update([
            'picture'=>$request->picture,
        ]);
    } elseif ($source === 'train') {
        train::where('id',$id)->update([
            'name'=>$request->name,
            'detail'=>$request->detail,
        ]);
    } 
    return redirect('relations_manage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // covenants::where('id', $id)->delete();
        // return redirect('relations_manage');
        $source = request('source');
        if ($source === 'covenants') {
            covenants::find($id)->delete();
        } elseif ($source === 'coop') {
            cooperation::find($id)->delete();
        } elseif ($source === 'train') {
            train::find($id)->delete();
        }
        
        return redirect('relations_manage');

    }
}
