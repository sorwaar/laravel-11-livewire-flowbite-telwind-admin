<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OtherController extends Controller
{
    public function ongoing()
    {
        return view('modules.others.ongoing');
    }
}
