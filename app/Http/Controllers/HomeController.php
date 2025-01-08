<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    public function index()    {

        $team = Team::all();
        
        return view('home', compact('team'));
    }
}
