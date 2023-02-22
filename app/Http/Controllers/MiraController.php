<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiraController extends Controller
{
    public function index() {
        return view('mira', [
            "name" => "mira"
        ]);
    }
}
