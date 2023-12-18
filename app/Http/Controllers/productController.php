<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        return view('frontend.product.list');
    }

    public function create(){
        return view('frontend.product.form');
    }

    public function store(Request $request){
        // return $request->name;
        // $request->validate([
        //     'name' => 'required',
        //     'quantity' => 'required',
            
        // ]);

        
    try {
        $product = new product;
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->save();
    } catch (\Throwable $th) {
        return back()->withInput()->withErrors(['error' => 'Failed to save the product']);

    }
       

        return view('frontend.product.form');

    }
}
