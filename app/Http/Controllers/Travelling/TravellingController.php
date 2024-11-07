<?php

namespace App\Http\Controllers\Travelling;

use App\Http\Controllers\Controller;
use App\Models\City\City;
use Illuminate\Http\Request;

class TravellingController extends Controller
{
    public function about($id) {
        $cities = City::select()->orderBy('id', 'desc')->take(5)->where('country_id', $id)->get();
        
        return view('travelling.about', compact('cities')) ;
    }
}
