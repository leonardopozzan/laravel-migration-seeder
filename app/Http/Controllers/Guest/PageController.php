<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;


class PageController extends Controller
{
    public function index(){
        $trains = Train::all();
        return view('welcome', compact('trains'));
    }
    public function filtered(){
        $currentDate = Carbon::now()->toDateString();
        $trains = Train::all()->where('data_partenza', $currentDate); 
        return view('welcome', compact('trains'));
    }
}
