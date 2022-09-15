<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NestingController extends Controller
{
    public $names = ['Rian', 'Riris', 'Tom'];

    public function index()
    {
        $data = [
            'name'  => 'Ricky',
            'names' => $this->names,
        ];

        return view('getting-started.nesting', $data);
    }
}
