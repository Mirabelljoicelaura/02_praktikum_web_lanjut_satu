<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        echo "Nama : Mirabell Joice Laura <br>";
        echo "NIM : 2141720174";
    }
    public function articles($id) {
        echo"Halaman artikel dengan ID : $id";
    }
}
