<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\SoftDeletes;


class PageController extends Controller
{
    public function index(){
        $trains = Train::all();
        return view('welcome', compact('trains'));
    }
    public function filtered(){
        $currentDate = today()->toDateString();
        $trains = Train::all()->where('data_partenza', $currentDate); 
        return view('welcome', compact('trains'));
    }
}
