<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;


class PageController extends Controller
{
    public function index(){
        $trains = Train::all();
        return view('welcome', compact('trains'));
    }
    public function filtered(){
        $trains = Train::all()->where('data_partenza', '2022-12-20'); 
        return view('welcome', compact('trains'));
    }
}
