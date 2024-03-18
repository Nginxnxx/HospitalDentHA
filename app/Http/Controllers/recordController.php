<?php

namespace App\Http\Controllers;

use App\Models\elderlygroup;
use App\Models\emergency;
use Illuminate\Http\Request;

use App\Models\special_patientgroup;

class recordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $special_patientgroup=special_patientgroup::all();
        $elderlygroup=elderlygroup::all();
        $emergency = emergency::all();
      
        return view('about.record.index',compact('special_patientgroup','elderlygroup','emergency'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $source = request('source');
        
        if ($source === 'eldergroups' || $source === 'specialpatient'|| $source === 'emergency') {
          
            return view('about.record.create', compact('source'));
        }
        else ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $source = request('source');
        $year = date(('Y'));
        if($source==='eldergroups'){
            $insertto = elderlygroup::insert([
                'year'=>$year ,
                'name'=>$request->name,
                'HN'=>$request->HN,
                'old'=>$request->old,
                'sex'=>$request->sex,
                'congenital_disease'=>$request->congenital_disease,
                'low_dependence'=>$request->low_dependence,
                'medium_dependence'=>$request->medium_dependence,
              
                'gero' => $request->gero ?? 0,
                'endo' => $request->endo ?? 0,
                'fillng' => $request->fillng ?? 0,
                'perio' => $request->perio ?? 0,
                'prosth' => $request->prosth ?? 0,
                'extraction' => $request->extraction ?? 0,
                
            ]);
        } elseif($source==='specialpatient'){
            $insertto = special_patientgroup::insert([
                'year'=>$year ,
                'name'=>$request->name,
                'HN'=>$request->HN,
                'phon'=>$request->phon,
                'old'=>$request->old,
                'sex'=>$request->sex,
                'U_D'=>$request->U_D,
                'GA'=>$request->GA,
              
                'Filling' => $request->Filling ?? 0,
                'Perio' => $request->Perio ?? 0,
                'Fluoride' => $request->Fluoride ?? 0,
                'Scaling' => $request->Scaling ?? 0,
                'Ext' => $request->Ext ?? 0,
                'OHI' => $request->OHI ?? 0,
                'Sealant' => $request->Sealant ?? 0,
               
            ]);
        }
        elseif($source==='emergency'){
            $insertto = emergency::insert([
                'date'=>$request->date,
                'HN'=>$request->HN,
                'name'=>$request->name,
                'endo' => $request->endo ?? 0,
                'fillng' => $request->fillng ?? 0,
                'perio' => $request->perio ?? 0,
                'other'=>$request->other,
                'month'=>$request->month,
                'year'=>$year ,
              
               
            ]);
        }
        else ; 
        dd( $insertto );
        return redirect('record_manage');
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
        
        if ($source === 'eldergroups') {
            $data = elderlygroup::where('id', $id)->first();
        } elseif($source === 'specialpatient') {
            $data = special_patientgroup::where('id', $id)->first();
        } 
        else{
        }
        // dd($data);
        return view('about.record.edit', compact('data','source'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $source = $request->input('source');
        $year = date(('Y'));
        // ตรวจสอบค่า $source เพื่อดำเนินการต่อไป
        if ($source === 'eldergroups') {
            elderlygroup::where('id',$id)->update([
                'year'=>$year ,
                'name'=>$request->name,
                'HN'=>$request->HN,
                'old'=>$request->old,
                'sex'=>$request->sex,
                'congenital_disease'=>$request->congenital_disease,
                'low_dependence'=>$request->low_dependence,
                'medium_dependence'=>$request->medium_dependence,
              
                'gero' => $request->gero ?? 0,
                'endo' => $request->endo ?? 0,
                'fillng' => $request->fillng ?? 0,
                'perio' => $request->perio ?? 0,
                'prosth' => $request->prosth ?? 0,
                'extraction' => $request->extraction ?? 0,
            ]);
        } elseif ($source === 'specialpatient') {
            special_patientgroup::where('id',$id)->update([
                'year'=>$year ,
                'name'=>$request->name,
                'HN'=>$request->HN,
                'phon'=>$request->phon,
                'old'=>$request->old,
                'sex'=>$request->sex,
                'U_D'=>$request->U_D,
                'GA'=>$request->GA,
              
                'Filling' => $request->Filling ?? 0,
                'Perio' => $request->Perio ?? 0,
                'Fluoride' => $request->Fluoride ?? 0,
                'Scaling' => $request->Scaling ?? 0,
                'Ext' => $request->Ext ?? 0,
                'OHI' => $request->OHI ?? 0,
                'Sealant' => $request->Sealant ?? 0,
            ]);
        } elseif ($source === 'emergency') {
            emergency::where('id',$id)->update([
                'date'=>$request->date,
                'HN'=>$request->HN,
                'name'=>$request->name,
                'endo' => $request->endo ?? 0,
                'fillng' => $request->fillng ?? 0,
                'perio' => $request->perio ?? 0,
                'other'=>$request->other,
                'month'=>$request->month,
                'year'=>$year ,
              
           
            ]);
        }

        return redirect('record_menage');  
        // dd($request,$source);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $source = request('source');
        if ($source === 'eldergroups') {
            elderlygroup::find($id)->delete();
        } elseif ($source === 'specialpatient') {
            special_patientgroup::find($id)->delete();
        } elseif ($source === 'emergency') {
            emergency::find($id)->delete();
        } 
        
        return redirect('record_menage');  
    }
}
