<?php

namespace App\Http\Controllers;

use App\Models\publish;
use Illuminate\Http\Request;

class publishController extends Controller
{   
    public function index()
    {
        return redirect('homeController');
    }
    
    public function create()
    {
        // return redirect('home');
        return view('home.index');
    }

    public function store(Request $request)
    {
    
        $request->validate([
            'name'=>'required',
            'detail'=>'required',
          
        ]);
        $input=$request->all();
        $request->hasFile('picture');
        if($request->hasFile('picture'))
        {
           
            $destinayion_path='public/images/publish';
            $image=$request->file('picture');
            $image_name=$image->getClientOriginalName();
            $path=$request->file('picture')->storeAs($destinayion_path,$image_name);
            
            $input['picture'] = $image_name;
        }
        

        publish::create($input);
 
        return redirect('home');

       
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $publish = publish::where('id', $id)->first();
        // dd($publish);
        return view('home.public.edit_public',compact('publish'));
    }

    public function update(Request $request, string $id)
    {
        publish::where('id', $id)
        ->update([
        'name' => $request->name,
        'detail' => $request->detail,
    ]);
    return redirect('home');
    }

    public function destroy(string $id)
    {
        publish::where('id', $id)->delete();
        return redirect('home');
    }
}
