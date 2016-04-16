<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class searchController extends Controller
{
    public function team() {
      $param = 'team';
      return view('search');
    }

    public function player() {
      $param = 'player';
      return view('search');
    }
}
