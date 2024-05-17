<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Webpatser\Countries\Countries;

class LocationController extends Controller
{
    public function create(){
        $countries = Countries::pluck('name');

        return view('dashboard.location.create', compact('countries'));
    }
}
