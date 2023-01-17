<?php

namespace App\Http\Controllers;

use App\Models\Api;
use App\Models\Module;
use Illuminate\Http\Request;

class FrontController extends Controller
{
   public function home(){
        $modules = Module::latest()->get();
        $apis = Api::all();
        return view('front.index')->with('modules', $modules)->with('apis', $apis);
   }
}
