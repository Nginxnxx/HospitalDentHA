<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\needController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\rulesController;
use App\Http\Controllers\factorController;
use App\Http\Controllers\recordController;
use App\Http\Controllers\visionController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\generalController;
use App\Http\Controllers\patientController;
use App\Http\Controllers\publishController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\activityController;
use App\Http\Controllers\buildingController;
use App\Http\Controllers\covenantsController;
use App\Http\Controllers\delivererController;
use App\Http\Controllers\relationsController;
use App\Http\Controllers\strategicController;
use App\Http\Controllers\structureController;
use App\Http\Controllers\competitionController;
use App\Http\Controllers\environmentController;
use App\Http\Controllers\informationController;
use App\Http\Controllers\outsourcingController;
use App\Http\Controllers\performanceController;
use App\Http\Controllers\howtoserviceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//basecontroller
Route::get('/performance',[Controller::class,'performance'])->name('performance');
Route::get('/rules',[Controller::class,'rules'])->name('rules');
Route::get('/',[Controller::class,'home'])->name('index');
// Route::get('/menu', [Controller::class,'menu'])->name('menu');
Route::get('/strategic',[Controller::class,'strategic'] )->name('strategic');
Route::get('/environment',[Controller::class,'environment'] )->name('environment');
Route::get('/relations',[Controller::class,'relations'] )->name('relations');
Route::get('/contact',[Controller::class,'contact'] )->name('contact');
Route::get('/treatmentcount',[Controller::class,'TreatmentCount'] )->name('treatmentcount');
Route::get('/structure',[Controller::class,'structure'] )->name('structure');
Route::get('/menu',[Controller::class,'menu'] )->name('menu');
Route::get('/risk',[Controller::class,'risk'] )->name('risk');
Route::get('/special_patientgroup',[Controller::class,'special_patientgroup'] )->name('special_patientgroup');
Route::get('/elderlygroups',[Controller::class,'elderlygroups'] )->name('elderlygroups');
Route::get('/emergency',[Controller::class,'emergency'] )->name('emergency');
// Route::get('tabs',[Controller::class,'home'])->name('tabs');

//สถิติ
Route::get('/record',[Controller::class,'Top12Diag'] )->name('record');
Route::get('/sendptcount',[Controller::class,'SendPTCount'] )->name('sendptcount');
Route::get('/patientstatisticspervisit',[Controller::class,'PatientStatisticsPerVisit'] )->name('patientstatisticspervisit');
Route::get('/patientstatistics',[Controller::class,'PatientStatistics'] )->name('patientstatistics');
Route::get('/lecturer',[Controller::class,'lecturer'] )->name('lecturer');
Route::get('/academic',[Controller::class,'academic'] )->name('academic');


Route::resource('home', homeController::class);


Route::get('/generalinfomation', function () {return view('home');})->name('generalinfomation');
Route::resource('generalinfomation', generalController::class);

//home หน้าเพิ่มข้อมูลกิจกรรม เพิ่มข้อมูลประชาสัมพันธ์ เพิ่มข้อมูลทั่วไป
Route::get('create_activity', function(){
    return view('home/activity/create_activity');
})->name('create_activity');
Route::get('edit_activity', function(){
    return view('home/activity/edit_activity');
})->name('edit_activity');
Route::get('create_public', function(){
    return view('home/public/create_public');
})->name('create_public');
Route::get('edit_public', function(){
    return view('home/public/edit_public');
})->name('edit_public');
Route::get('edit_infomation', function(){
    return view('home/infomation/edit_infomation');
})->name('edit_infomation');
Route::get('/publish', function () {return view('home/public');})->name('publish');
Route::resource('publish', publishController::class);
//เมนู
// Route::get('/menu_manege', function () {return view('menu/index');})->name('menu_manege');
Route::resource('menu_manege', menuController::class);
// Route::get('/menu', function(){
//     return view('menu.menu');
// })->name('menu');

//ติดต่อ
Route::get('/contact_menege', function () {return view('contact/index');})->name('contact_menege');
Route::resource('contact_menege', contactController::class);
// Route::get('/contact', function(){
//     return view('contact.contact');
// })->name('contact');

//อาคาร
Route::get('/building_menege', function () {return view('about/building/index');})->name('building_menege');
Route::resource('building_menege', buildingController::class);
Route::get('/building', function(){
    return view('about.building.building');
})->name('building');

//วิสัยทัศน์ พันธกิจ
Route::get('/vision_menege', function () {return view('about/vision/index');})->name('vision_menege');
Route::resource('vision_menege', visionController::class);
Route::get('/vision', function(){
    return view('about.vision.vision');
})->name('vision');

//กฏระเบียบและข้อบังคับ
Route::get('/rules_menege', function () {return view('about/rules/index');})->name('rules_menege');
Route::resource('rules_menege', rulesController::class);
// Route::get('/rules', function(){
//     return view('about.rules.rules');
// })->name('rules');

//โครงสร้างองค์กร
Route::get('/structure_menege', function () {return view('about/structure/index');})->name('structure_menege');
Route::resource('structure_menege', structureController::class);
// Route::get('/structure', function(){
//     return view('about.structure.structure');
// })->name('structure');

//ระบบการปรับปรุง Performance ขององค์กร
Route::get('/performance_menege', function () {return view('about/performance/index');})->name('performance_menege');
Route::resource('performance_menege', performanceController::class);

// Route::get('/performance', function(){
//     return view('about.performance.performance');
// })->name('performance');


//ข้อมูลทั่วไป
// Route::get('/information_menege', function () {return view('home/home');})->name('information_menege');
Route::resource('information_menege', informationController::class);

//กิจกรรม
Route::resource('activity_menege', activityController::class);

//บริบทเชิงกลยุทธ์
Route::get('/strategic_manage', function () {return view('about/strategic/index');})->name('strategic_manage');
Route::resource('strategic_manage', strategicController::class);
// Route::get('strategic', function(){
//     return view('about/strategic/strategic');
// })->name('strategic');
Route::get('create_healthproblems', function(){
    return view('about/strategic/create_healthproblems');
})->name('create_healthproblems');
Route::get('edit_healthproblems', function(){
    return view('about/strategic/edit_healthproblems');
})->name('edit_healthproblems');




//สภาพแวดล้อม
Route::get('/environment_manage', function () {return view('about/environment/index');})->name('environment_manage');
Route::resource('environment_manage', environmentController::class);
// Route::get('environment', function(){
//     return view('about.environment.environment');
// })->name('environment');
Route::get('create_growth', function(){
    return view('about.environment.create_growth');
})->name('create_growth');
Route::get('edit_growth', function(){
    return view('about.environment.edit_growth');
})->name('edit_growth');
Route::get('edit_competition', function(){
    return view('about.environment.edit_competition');
})->name('edit_competition');
Route::get('create_competition', function(){
    return view('about.environment.create_competition');
})->name('create_competition');
Route::get('edit_factor', function(){
    return view('about.environment.edit_factor');
})->name('edit_factor');
Route::get('create_factor', function(){
    return view('about.environment.create_factor');
})->name('create_factor');
//เพิ่มสภาพแวดล้อมด้านการแข่งขัน 
Route::get('/competition', function () {return view('about.environment');})->name('competition');
Route::resource('competition', competitionController::class);
//เพิ่มปัจจัยความสำเร็จ
Route::get('/factor', function () {return view('about.environment');})->name('factor');
Route::resource('factor', factorController::class);

//สถิติ
Route::get('/record_menage', function () {return view('about/record/index');})->name('record_menage');
Route::resource('record_menage', recordController::class);


//ความสัมพันธ์
Route::get('/relations_manage', function () {return view('about/relations/index');})->name('relations_manage');
Route::resource('relations_manage', relationsController::class);
// Route::get('relations', function(){
//     return view('about/relations/relations');
// })->name('relations');
Route::get('create_governance', function(){
    return view('about/relations/create_governance');
})->name('create_governance');
Route::get('edit_governance', function(){
    return view('about/relations/edit_governance');
})->name('edit_governance');

//ผู้ส่งมอบและคู่ความร่วมมือ
Route::get('/covenants', function () {return view('about/relations');})->name('covenants');
Route::resource('covenants', covenantsController::class);
Route::get('create_covenants', function(){
    return view('about/relations/create_covenants');
})->name('create_covenants');
Route::get('edit_covenants', function(){
    return view('about/relations/edit_covenants');
})->name('edit_covenants');

//ผู้ส่งมอบและคู่ความร่วมมือ
Route::get('/deliverer', function () {return view('about/relations');})->name('deliverer');
Route::resource('deliverer', delivererController::class);
Route::get('create_deliverer', function(){
    return view('about/relations/create_deliverer');
})->name('create_deliverer');
Route::get('edit_deliverer', function(){
    return view('about/relations/edit_deliverer');
})->name('edit_deliverer');

//กลุ่มผู้ป่วย/ผู้รับบริการที่สำคัญและความต้องการ
Route::get('/need', function () {return view('about/relations');})->name('need');
Route::resource('need', needController::class);
Route::get('create_need', function(){
    return view('about/relations/create_need');
})->name('create_need');
Route::get('edit_need', function(){
    return view('about/relations/edit_need');
})->name('edit_need');

//บริการที่มีการจ้างเหมามาจากภายนอก
Route::get('/outsourcing', function () {return view('about/relations');})->name('outsourcing');
Route::resource('outsourcing', outsourcingController::class);
Route::get('create_outsourcing', function(){
    return view('about/relations/create_outsourcing');
})->name('create_outsourcing');
Route::get('edit_outsourcing', function(){
    return view('about/relations/edit_outsourcing');
})->name('edit_outsourcing');

//กลุ่มผู้ป่วย/ผู้รับบริการที่สำคัญและความต้องการ
Route::get('/patient', function () {return view('about/relations');})->name('patient');
Route::resource('patient', patientController::class);
Route::get('create_patient', function(){
    return view('about/relations/create_patient');
})->name('create_patient');
Route::get('edit_patient', function(){
    return view('about/relations/edit_patient');
})->name('edit_patient');

//โครงสร้างเครือข่ายบริการและเครือข่ายความร่วมมือ
Route::get('/service', function () {return view('about/relations');})->name('service');
Route::resource('service', serviceController::class);
Route::get('create_service', function(){
    return view('about/relations/create_service');
})->name('create_service');
Route::get('edit_service', function(){
    return view('about/relations/edit_service');
})->name('edit_service');


Route::get('/person', function(){
    return view('about.record.person');
})->name('person');


//admin
Route::get('/admin', function () {return view('admin/index');})->name('admin');
Route::resource('admin', adminController::class);

//หน้าขั้นตอนการบริการ
Route::get('edit_service', function(){
    return view('home/service/edit_service');
})->name('edit_service');
Route::get('/service', function () {return view('home/service');})->name('service');
Route::resource('service', howtoserviceController::class);




//ไว้ทดสอบ
// Route::get('/tabs', function(){
//     return view('tabs');
// })->name('tabs');
Route::get('/tabs1', function(){
    return view('tabs1');
})->name('tabs1');
// Route::get('/tabs2', function(){
//     return view('tabs2');
// })->name('tabs2');


Route::get('/standard', function(){
    return view('standard.standard');
})->name('standard');

Route::get('/history', function(){
    return view('history');
})->name('history');
Route::get('/personnel', function(){
    return view('personnel');
})->name('personnel');










// Route::get('backend/test', function(){
//     return view('backend/.test');})->name('test');


Route::prefix('backend')->group(function(){
    Route::get('/test', function(){
        return view('backend.test');})->name('test');


    Route::get('/layoutbe', function(){
        return view('backend.layoutbe');})->name('layoutbe');

    Route::get('/record_dianostic', function(){
        return view('backend.record_dianostic');})->name('record_dianostic');

    Route::get('/record_serve', function(){
    return view('backend.record_serve');})->name('record_serve');   
    
    Route::get('/record_traet', function(){
        return view('backend.record_traet');})->name('record_traet'); 

    Route::get('/rate_person', function(){
        return view('backend.rate_person');})->name('rate_person'); 

    // Route::get('/edit_menu', function(){
    //     return view('backend.edit_menu');})->name('edit_menu'); 
});
