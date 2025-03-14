<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function page_add(){
        return view('productAdd');
    }

    public function add(){
        return view('productAdd');
    }
}
