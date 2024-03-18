<?php

namespace App\Http\Controllers;

use App\Models\advantages;
use App\Models\challenges;
use App\Models\externalenv;
use Illuminate\Http\Request;
use App\Models\problemsinarea;
use App\Models\problemstrying;
use App\Models\problemsdevelop;
use App\Models\problemsforward;

class strategicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $problemsinarea = problemsinarea::all();
        $problemsdevelop = problemsdevelop::all();
        $problemsforward = problemsforward::all();
        $challenges = challenges::all();
        $externalenv = externalenv::all();
        $problemstrying = problemstrying::all();
        $advantages = advantages::all();
        dd($advantages );
        return view('about.strategic.index',compact('problemsinarea','problemsdevelop','problemsforward','challenges','externalenv','problemstrying','advantages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $source = request('source');
        if ($source === 'problemsinarea' || $source === 'problemsdevelop' || $source === 'problemsforward' || $source === 'challenges' || $source === 'externalenv' || $source === 'problemstrying' || $source === 'advantages') {
            return view('about.strategic.create_healthproblems', compact('source'));
        }
        else ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $source = request('source');
        if($source==='problemsinarea'){
            problemsinarea::insert([
                'detail'=>$request->detail,
            ]);
        } elseif($source==='problemsdevelop'){
            problemsdevelop::insert([
                'detail'=>$request->detail,
            ]);
        } elseif($source==='problemsforward'){
            problemsforward::insert([
                'detail'=>$request->detail,
            ]);     
        } elseif($source==='challenges'){
            challenges::insert([
                'detail'=>$request->detail,
            ]);
        } elseif($source==='externalenv'){
            externalenv::insert([
                'detail'=>$request->detail,
            ]);
        } elseif($source==='problemstrying'){
            problemstrying::insert([
                'detail'=>$request->detail,
            ]);
        } elseif($source==='advantages'){
            advantages::insert([
                'detail'=>$request->detail,
            ]);
        }
        else ; 
        // dd( $source );
        return redirect('strategic_manage');
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
        if ($source === 'problemsinarea') {
            $data = problemsinarea::where('id', $id)->first();
        } elseif($source === 'problemsdevelop') {
            $data = problemsdevelop::where('id', $id)->first();
        } elseif ($source === 'problemsforward') {
            $data = problemsforward::where('id', $id)->first();
        } elseif ($source === 'challenges') {
            $data = challenges::where('id', $id)->first();
        } elseif ($source === 'externalenv') {
            $data = externalenv::where('id', $id)->first();
        } elseif ($source === 'problemstrying') {
            $data = problemstrying::where('id', $id)->first();
        } elseif ($source === 'advantages') {
            $data = advantages::where('id', $id)->first();
        }
        else{
        }
        // dd($data);
        return view('about.strategic.edit_healthproblems', compact('data','source'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $source = $request->input('source');
    
        // ตรวจสอบค่า $source เพื่อดำเนินการต่อไป
        if ($source === 'problemsinarea') {
            problemsinarea::where('id',$id)->update([
                'detail'=>$request->detail,
            ]);
        } elseif ($source === 'problemsdevelop') {
            problemsdevelop::where('id',$id)->update([
                'detail'=>$request->detail,
            ]);
        } elseif ($source === 'problemsforward') {
            problemsforward::where('id',$id)->update([
                'detail'=>$request->detail,
            ]);
        } elseif ($source === 'challenges') {
            challenges::where('id',$id)->update([
                'detail'=>$request->detail,
            ]);
        } elseif ($source === 'externalenv') {
            externalenv::where('id',$id)->update([
                'detail'=>$request->detail,
            ]);
        } elseif ($source === 'problemstrying') {
            problemstrying::where('id',$id)->update([
                'detail'=>$request->detail,
            ]);
        } elseif ($source === 'advantages') {
            advantages::where('id',$id)->update([
                'detail'=>$request->detail,
            ]);
        }
        return redirect('strategic_manage');  
        // dd($request,$source);
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $source = request('source');
        if ($source === 'problemsinarea') {
            problemsinarea::find($id)->delete();
        } elseif ($source === 'problemsdevelop') {
            problemsdevelop::find($id)->delete();
        } elseif ($source === 'problemsforward') {
            problemsforward::find($id)->delete();
        } elseif ($source == 'challenges') {
            challenges::find($id)->delete();
        } elseif ($source == 'externalenv') {
            externalenv::find($id)->delete();
        } elseif ($source == 'problemstrying') {
            problemstrying::find($id)->delete();
        } elseif ($source == 'advantages') {
            advantages::find($id)->delete();
        }
        return redirect('strategic_manage');  
    }
}
