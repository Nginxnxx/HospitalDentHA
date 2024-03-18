<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coordinate_structure;
use App\Models\administer_structture;
use App\Models\ggovernance_structure;
use App\Models\denthospital_structture;
use Illuminate\Support\Facades\Storage;

class structureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $administer = administer_structture::all();
        $coordinate = coordinate_structure::all();
        $denthospital=denthospital_structture::all();
        $ggovernance=ggovernance_structure::all();
        return view('about.structure.index', compact('administer', 'coordinate', 'denthospital', 'ggovernance'));
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
        // ตรวจสอบค่า 'source' ที่ส่งมาจากลิงก์ "แก้ไข"
        $source = request('source');

        // ตรวจสอบว่า source เป็นจากตาราง 'administer' หรือไม่
        if ($source === 'administer') {
            $data = administer_structture::where('id', $id)->first();
        } elseif($source === 'denthospital') {
            $data = denthospital_structture::where('id', $id)->first();
        } elseif ($source === 'coordinate') {
            $data = coordinate_structure::where('id', $id)->first();
        } elseif ($source === 'ggovernance') {
            $data = ggovernance_structure::where('id', $id)->first();
        }
        else{

        }

        // dd($data);

        return view('about.structure.edit', compact('data','source'));
    }

    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
            // รับค่า $source จากฟอร์ม
        $source = $request->input('source');

        if ($source === 'administer') {
            $request->validate([
                'name' => 'required',
                'detail' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // เพิ่ม validation rules สำหรับรูปภาพ
            ]);
        
            $structure = administer_structture::find($id);
        
            // อัปเดตฟิลด์ name
            $structure->name = $request->name;
        
            // ถ้ามีการอัปโหลดรูปภาพใหม่
            if ($request->hasFile('detail')) {
                $image = $request->file('detail');
                $image_name = $image->getClientOriginalName();
                $destination_path = 'public/images/structure';
                $path = $image->storeAs($destination_path, $image_name);
        
                // ลบรูปเก่า (หากมี)
                if ($structure->detail) {
                    Storage::delete('public/images/structure/' . $structure->detail);
                }
        
                // อัปเดตฟิลด์ detail เป็นชื่อไฟล์รูปภาพใหม่
                $structure->detail = $image_name;
            }
        
            // บันทึกการเปลี่ยนแปลง
            $structure->update();
        
            
            

        } elseif ($source === 'denthospital') {
            $request->validate([
                'name' => 'required',
                'picture' => 'image|mimes:jpeg,png,jpg,gif'// เพิ่ม validation rules สำหรับรูปภาพ
            ]);
            
            $structure = denthospital_structture::find($id);
            
            // อัปเดตฟิลด์ name
            $structure->name = $request->name;
            
            // ถ้ามีการอัปโหลดรูปภาพใหม่
            if ($request->hasFile('picture')) {
                $image = $request->file('picture');
                $image_name = $image->getClientOriginalName();
                $destination_path = 'public/images/structure';
                $path = $image->storeAs($destination_path, $image_name);
            
                // ลบรูปเก่า (หากมี)
                if ($structure->picture) {
                    Storage::delete('public/images/structure/' . $structure->picture);
                }
            
                // อัปเดตฟิลด์ picture เป็นชื่อไฟล์รูปภาพใหม่
                $structure->picture = $image_name;
            }
            
            // บันทึกการเปลี่ยนแปลง
            $structure->save();
        
        } elseif ($source === 'coordinate') {
            coordinate_structure::where('id',$id)->update([
                'name'=>$request->name,
                'detail'=>$request->detail,
            ]);
        } elseif ($source === 'ggovernance') {
            ggovernance_structure::where('id',$id)->update([
                'name'=>$request->name,
                'detail'=>$request->detail,
            ]);
        }
        return redirect('structure_menege');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
              // รับค่า $source จากฟอร์ม
              $source = request('source');

              // ตรวจสอบค่า $source เพื่อดำเนินการต่อไป
              if ($source === 'administer') {
                $delete = administer_structture::find($id)->delete();
              } elseif ($source === 'denthospital') {
                $delete = denthospital_structture::find($id)->delete();
              } elseif ($source === 'coordinate') {
                $delete = coordinate_structure::find($id)->delete();
              } elseif ($source === 'ggovernance') {
                $delete = ggovernance_structure::find($id)->delete();
              }
              
              return redirect('structure_menege');
    }
}
