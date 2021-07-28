<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Restaurant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $restaurants=Restaurant::all();
        return view('admin.home',compact('restaurants'));
    }
}
