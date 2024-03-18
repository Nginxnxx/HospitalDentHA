<?php

namespace App\Http\Controllers;

use App\Models\devquality;
use App\Models\outstanding;
use App\Models\process_commu;
use App\Models\process_createinnovation;
use App\Models\process_learn;
use Illuminate\Http\Request;

class performanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $devquality = devquality::all();
        $outstanding= outstanding::all();
        $process_commu =process_commu::all();
        $process_createinnovation = process_createinnovation::all();
        $process_learn=process_learn::all();
        return view('about.performance.index',compact('devquality','outstanding','process_commu','process_createinnovation','process_learn'));
        
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $source = request('source');
        if($source==='devquality'){
            return view('about.performance.create');
        }
        elseif($source==='outstanding'){
            return view('about.performance.create_outstanding');
        }
        elseif ($source === 'process_commu' || $source === 'process_createinnovation' || $source === 'process_learn') {
            return view('about.performance.create_process', compact('source'));
        }
        else ;
        // dd( $source );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $source = request('source');
        if($source==='devquality'){
            devquality::insert([
                'name'=>$request->name,
            ]);
        }elseif($source==='outstanding'){
            outstanding::insert([
                'name'=>$request->name,
            ]);
        }elseif($source==='process_commu'){
            process_commu::insert([
                'name'=>$request->name,
            ]);
        }elseif($source==='process_createinnovation'){
            process_createinnovation::insert([
                'name'=>$request->name,
            ]);
        }elseif($source==='process_learn'){
            process_learn::insert([
                'name'=>$request->name,
            ]);
        }
        else ;
        // dd( $source );
        return redirect('performance_menege');
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
        if($source==='devquality'){
            $data = devquality::where('id', $id)->first();
            return view('about.performance.edit', compact('data','source'));
        }elseif($source==='outstanding'){
            $data = outstanding::where('id', $id)->first();
            return view('about.performance.edit_outstanding', compact('data','source'));
        }elseif($source==='process_commu'){
            $data = process_commu::where('id', $id)->first();
            return view('about.performance.edit_process', compact('data','source'));
        }elseif($source==='process_createinnovation'){
            $data = process_createinnovation::where('id', $id)->first();
            return view('about.performance.edit_process', compact('data','source'));
        }elseif($source==='process_learn'){
            $data = process_learn::where('id', $id)->first();
            return view('about.performance.edit_process', compact('data','source'));
        }
        else ;
        // dd( $source );
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $source = request('source');
        if($source==='devquality'){
            devquality::where('id',$id)->update([
                'name'=>$request->name,
             
            ]);
        }elseif($source==='outstanding'){
            outstanding::where('id',$id)->update([
                'name'=>$request->name,
                
            ]);
        }elseif($source==='process_commu'){
            process_commu::where('id',$id)->update([
                'name'=>$request->name,
              
            ]);
        }elseif($source==='process_createinnovation'){
            process_createinnovation::where('id',$id)->update([
                'name'=>$request->name,
               
            ]);
        }elseif($source==='process_learn'){
            process_learn::where('id',$id)->update([
                'name'=>$request->name,
               
            ]);
        }
        else ;
        // dd( $source );
        return redirect('performance_menege');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $source = request('source');
        if($source==='devquality'){
            $delete = devquality::find($id)->delete();
        }elseif($source==='outstanding'){
            $delete = outstanding::find($id)->delete();
        }elseif($source==='process_commu'){
            $delete = process_commu::find($id)->delete();
        }elseif($source==='process_createinnovation'){
            $delete = process_createinnovation::find($id)->delete();
        }elseif($source==='process_learn'){
            $delete = process_learn::find($id)->delete();
        }
        else ;
        // dd( $source );
        return redirect('performance_menege');
    }
}
