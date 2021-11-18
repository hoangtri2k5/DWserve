<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function processForm(Request $request){
        $name = $request->get('name');
        $apartment =new Admin($request->all());
        $apartment->save();
        return "OK $name";
    }
}
