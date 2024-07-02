<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('pages.products');
    }


    public function showDetails(){
        return view('pages.productDetails');
    }

    public function showPanier(){
        return view('pages.panier');
    }
}
