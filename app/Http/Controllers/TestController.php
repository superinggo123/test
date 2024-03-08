<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;

class TestController extends Controller
{
    public function index(){
        $data = test::get();
        //return $data;
        return view('index', compact('data'));
    } 
    public function create(){
        return view('create');
    }
    public function save(Request $request){
        //dd($request->all());

        $request ->validate ([
            'name'=> 'required|min:5',
            'lastname' => 'required|min:5',   

        ]);

        $name = $request->name;
        $lastname = $request->lastname;

        $test = new test();
        $test -> name = $name;
        $test -> lastname = $lastname;
        $test ->save();

        return redirect()->back()->with('success','Na add na');
    }
}
