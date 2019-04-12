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

    public function create(){
        return view('shi.create');
    }
    public function store(){
        dd(request());
        $data =request()->all();
        $shi =new Shi();
        $shi->name =$data['name'];
        $shi->description =$data['description'];
        $shi->compeleted -fales;
        $shi->save();

        return redirect('/shi');
    }
}
