<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function page_add($id_profile){
        $profile = Profile::all()->find($id_profile);
        return view('productAdd',['profile'=>$profile]);
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
        $product->profile_id = $request->input('profile_id');


        $product->save();

        return redirect()->route('profile');

    }
}
