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
}
