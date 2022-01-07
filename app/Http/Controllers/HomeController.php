<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // $latest_properties = Property::latest()->get()->take(4);
        $latest_properties = Property::get()->take(4);
        $locations = Location::select(['id', 'name'])->get();
        return view('welcome', [
            'latest_properties' => $latest_properties,
            'locations' => $locations
        ]);
    }
}
