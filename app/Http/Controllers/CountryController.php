<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::latest()->get();
        return view('filter',compact('countries'));
    }
    public function getCityList($countryID)
    {
        $cities = City::all()->where("country_id",$countryID)->pluck('city','id');
        return response()->json($cities);
    }
    
}
