<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PopulerCalculator extends Controller
{
    public function index(){
        return view('Admin.populer_calculator');
    }
    public function calculator_list(){
        $list = DB::table('calculator_lists')->get();
        foreach($list as $item){
            echo ' <div class="form-check" >
            <input class="form-check-input" name="category_id" type="checkbox" onchange="listSubmit(this.value)" value="'.$item->id.'" id="calculators">
            <label class="form-check-label" for="flexCheckDefault">
               '.$item->calculator_name.'
            </label>
        </div>';
        }
    }
}
