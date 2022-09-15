<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class gettingStartedController extends Controller
{
    public function installation()
    {
        return view('getting-started.installation');
    }
}
