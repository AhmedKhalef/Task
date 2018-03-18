<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Products::paginate(7);
        $countries = Country::latest()->get();   
        $html='';
        foreach ($products as $product) {
            $html.='<tr><td>'.$product->name.'</td><td>'.$product->price .'</td><td>'.$product->details .'</td><td>'.$product->city->city .'</td></tr>';
        }
        if ($request->ajax()) {
            return $html;
        }    
        return view('task', compact('products','countries'));
    }

    public function result(Products $products, Request $request)
    {
        $products = City::find($request['city'])->products()->get();
        return view('result', compact('products'));        
    }
}
