<?php

namespace App\http\Controllers;

use App\Http\Controllers;
use Illuminate\Request;

class HomeController extends Controller
{
 public function index()
 {
    return view('home');
 }
} 