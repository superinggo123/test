<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\test;

class TestController extends Controller
{
    public function index(){
        $data = test::get();
        return $data;
    }
}
