<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adController extends Controller
{
  public function index()
  {
    return view('ad.index');
  }
}
