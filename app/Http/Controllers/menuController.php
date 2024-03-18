<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $menu = Menu::all();
        // dd($menu);
        return view('menu.index',compact('menu'));
    }

    /** 
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      

        $request->validate([
            'name'=>'required',
            'detail'=>'required',
        ]);
        $input=$request->all();
        if($request->hasFile('picture'))
        {
            $destinayion_path='public/images/menu';
            $image=$request->file('picture');
            $image_name=$image->getClientOriginalName();
            $path=$request->file('picture')->storeAs($destinayion_path,$image_name);
            
            $input['picture'] = $image_name;
        }

        Menu::create($input);

        
        
        return redirect('menu_manege');
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
        
        $menu = Menu::where('id',$id)->first();
        // dd($menu);
        return view('menu.edit',compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        
        $menu = Menu::find($id); // ปรับเปลี่ยน $id เป็นรหัสของเมนูที่ต้องการแก้ไข
        
        $input = $request->all();
        
        if($request->hasFile('picture'))
        {
            $destinayion_path='public/images/menu';
            $image=$request->file('picture');
            $image_name=$image->getClientOriginalName();
            $path=$request->file('picture')->storeAs($destinayion_path,$image_name);
            

            if ($menu->picture) {
                Storage::delete('public/images/menu/' . $menu->picture);
            }

            $input['picture'] = $image_name;
        }
        
        $menu->update($input);
        return redirect('menu_manege');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::findOrFail($id);
    
        // ลบเมนู
        $menu->delete();

        // ลบไฟล์รูปภาพที่เกี่ยวข้อง
        if ($menu->picture) {
            Storage::delete('public/images/menu/' . $menu->picture);
        }

        return redirect('menu_manage');
    }
}
