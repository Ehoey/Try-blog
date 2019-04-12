<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Shi;
class ShiController extends Controller
{
    //


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){

        return view('shi.index')->with('shi', Shi::all());
    }
    public function show($shiId){
        $shi = Shi::find($shiId);

        return view('shi.show')->with('shi',$shiId);
    }
}
