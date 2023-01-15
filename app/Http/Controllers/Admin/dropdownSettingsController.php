<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dropdownSettingsController extends Controller
{
    public function edit(){
       return view('Admin.dropdown_settings');
    }

    public function store(Request $request){

        $cat_id = $request->category_id;

        for($i = 0; $i < count($cat_id);$i++){
            $title = $request->title;
            $update_section_title = DB::table('dropdown_categories')->where('id','=',$cat_id[$i])->update([
                'name'=>$title[$i],
            ]);
        }
        for($x = 0; $x < count($request->menu_name1);$x++){

           if($request->id){

                   $update = DB::table('dropdown_menus')->updateOrInsert(['id'=>$request->id],[
                       'cat_id'=>1,
                       'name'=>$request->menu_name1[$x],
                       "url"=>$request->menu_link1[$x],
                       "display_order"=>0
                   ]);
               }
           }





    }
}
