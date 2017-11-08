<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DushboardController extends Controller
{
    //dushboard
    public function dushboard() {
return view('admin.dushboard');
    }
}
