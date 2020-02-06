<?php

namespace App\Http\Controllers;
use App\Models\Name;
use Illuminate\Http\Request;

class nameController extends Controller
{
    //
    public function name(Request $request)
    {
        $names = Name::all();
        return view('timeTracker',compact('names'));
    }
}
