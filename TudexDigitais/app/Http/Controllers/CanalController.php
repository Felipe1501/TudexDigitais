<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Canal;

class CanalController extends Controller
{
    public function index(){

        $canals = Canal::all();
        
        return view('welcome', ['canals' => $canals]);
    }

    public function create(){
        return view('canals.create');
    }
}
