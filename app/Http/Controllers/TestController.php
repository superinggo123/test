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
    public function edit($id){
        $data = test::where('id', '=', $id)->first();
        return view('edit', compact('data'));
    }
    public function update(Request $request){
          $request ->validate ([
            'name'=> 'required|min:5',
            'lastname' => 'required|min:5',   

        ]);

        $id = $request ->id;
        $name = $request->name;
        $lastname = $request->lastname;

        test::where('id', '=', $id)->update([
            'name' => $name,
            'lastname' => $lastname,

        ]);

        return redirect()->back()->with('success', 'Na update na');

    }
    public function delete($id){
        test::where('id', '=', $id)->delete();

        return redirect()->back()->with('success', 'Na delete na');
    }
}
    