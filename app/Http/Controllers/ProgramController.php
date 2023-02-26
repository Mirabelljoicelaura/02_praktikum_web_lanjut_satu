<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index() {
        return view("program");
    }
    public function show($id) {
        echo"Program $id";
    }
}
