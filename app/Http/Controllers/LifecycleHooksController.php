<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifecycleHooksController extends Controller
{
    public function index()
    {
        return view('getting-started.lifecycle-hooks');
    }
}
