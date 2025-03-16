<?php

namespace App\Http\Controllers;

use App\Models\Product;
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

        $product = new Product();
        $product->title = $request->input('title');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->status = $request->input('status');

        $product->save();

        return redirect()->route('profile');

    }
}
