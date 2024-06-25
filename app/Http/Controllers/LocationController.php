<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WisdomDiala\Countrypkg\Models\Country;

class LocationController extends Controller
{
    public function create(){
        $countries = Country::pluck('name');
        return view('dashboard.location.create', compact('countries'));
    }
    public function store(Request $request){
        
        $data = $request->validate([
            'title'=> 'required',
            'country'=>'required',
            'featuredImage'=> 'required|image|mimes:jpeg,png,jpg,webp',
            'description'=> 'required',
        ]);
        
        if ($request->hasFile('featuredImage')) {
            $imageName = time() . '.' . $request->featuredImage->getClientOriginalExtension();
            dd($imageName);
            // $data['image_name']=$imageName;
            // $request->featuredImage->storeAs('public/locations', $imageName); // Adjust storage path
        }
        else {
            dd('image not preset');
        }
        return response()->json(['message' => 'Data has been successfully saved.', 'data' => $data], 200);

    }
}
