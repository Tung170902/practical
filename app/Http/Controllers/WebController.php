<?php

namespace App\Http\Controllers;

use App\Models\Apartment;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function all(){
        $apart = Apartment::all();
        return view("welcome",["apart" => $apart]);
    }
}
