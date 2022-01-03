<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function single($id)
    {
        $property = Property::findOrFail($id);
        return view('property.single', ['property' => $property]);
    }
    public function index()
    {
        $latest_properties = Property::latest()->get()->paginate(12);
        return view('property.index', ['latest_properties' => $latest_properties]);
    }
}
