<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controller; 

class PostController extends Controller
{
    public function index() {
        return view('index');
    }
}
