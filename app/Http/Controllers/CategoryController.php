<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CategoryController extends Controller
{
    public function getHistory(){
        $products = Product::where('category', 'History')->get();
        return view('shop.index', ['products' => $products]);
    }

    public function getAction(){
        $products = Product::where('category', 'Action')->get();
        return view('shop.index', ['products' => $products]);
    }
    public function getAdventure(){
        $products = Product::where('category', 'Adventure')->get();
        return view('shop.index', ['products' => $products]);
    }
    public function getFantasy(){
        $products = Product::where('category', 'Fantasy')->get();
        return view('shop.index', ['products' => $products]);
    }
    public function getRomance(){
        $products = Product::where('category', 'Romance')->get();
        return view('shop.index', ['products' => $products]);
    }
}
