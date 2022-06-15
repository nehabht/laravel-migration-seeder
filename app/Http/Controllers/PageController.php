<?php

namespace App\Http\Controllers;
use App\Models\Tour;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        //dd($tours);
        return view('home', compact('tours'));
    }
}
