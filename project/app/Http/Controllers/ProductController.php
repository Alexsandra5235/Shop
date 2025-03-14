<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function page_add(){
        return view('productAdd');
    }

    public function add(Request $request){
        $validated = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);
    }
}
