<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

    class AboutController extends Controller
    {
    public function about(){
        echo "Nama  : Rizka Musyarofatul Hidayah <br>";
        echo "NIM   : 2041720095 <br>";
        echo "Kelas : TI-2G";
    }
}

