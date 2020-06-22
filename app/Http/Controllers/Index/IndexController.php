<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
     //后台的首页
    public function index(Request $request){
    	return view("index.index");
    }
}
