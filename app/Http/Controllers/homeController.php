<?php

namespace App\Http\Controllers;

use App\Models\publish;
use App\Models\activitys;
use App\Models\general;
use App\Models\management;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $activitys = activitys::all(); 
        $publish = publish::all();
        $general = general::all();
        $management = management::all();
        // dd($activitys,$publish);
        return view('home.index', compact('activitys', 'publish','general','management'));
    }

    public function create()
    {        
        return view('home.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'picture.*' => 'required|image',
        ]);

        $input = $request->all();

        if ($request->hasFile('picture')) {
            $destination_path = 'public/images/activity';
            $pictures = []; // สร้างอาร์เรย์เพื่อเก็บชื่อรูปภาพที่อัปโหลด

            foreach ($request->file('picture') as $image) {
                $image_name = $image->getClientOriginalName();
                $image->storeAs($destination_path, $image_name);
                $pictures[] = $image_name; // เก็บชื่อไฟล์ภาพลงในอาร์เรย์
            }

            // รวมชื่อรูปภาพให้เป็นสตริงแยกด้วยเครื่องหมาย ,
            $input['picture'] = implode(',', $pictures);
        }

        activitys::create($input);

        return redirect('home');

    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $activitys = activitys::where('id', $id)->first();
        // dd($activitys);
        return view('home.activity.edit_activity',compact('activitys'));
    }

    public function update(Request $request, string $id)
    {
        // dd($request,$id);
    //     activitys::where('id', $id)
    //     ->update([
    //     'name' => $request->name,
    //     'detail' => $request->detail,
    // ]);
    // return redirect('home');

        
        $request->validate([
            'name'=>'required',
            'detail'=>'required',
        ]);
        $input=$request->all();
        if($request->hasFile('picture'))
        {
            $destinayion_path='public/images/activity';
            $image=$request->file('picture');
            $image_name=$image->getClientOriginalName();
            $path=$request->file('picture')->storeAs($destinayion_path,$image_name);
            
            $input['picture'] = $image_name;
        }

        activitys::create($input);

        
        dd($input);
        return redirect('home');
    }

    public function destroy(string $id)
    {
        // dd($id);
        // activitys::destroy($id);
        activitys::where('id', $id)->delete();
        return redirect('home');
    }
}
