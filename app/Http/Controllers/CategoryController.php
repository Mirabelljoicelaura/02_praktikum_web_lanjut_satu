<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        return view("category");
    }
    public function show($id) {
        echo"Berikut Merupakan Produk $id";
    }
}
