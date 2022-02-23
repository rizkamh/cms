<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Hi!Selamat Datang di Website Laravel";
    }
    public function about(){
        return "Nama:Rizka Musyarofatul Hidayah <br> NIM:2041720095 <br> TI-2G";
    }
    public function articles($id){
        return "Ini adalah Halaman Artikel dengan ID '$id' ";
    }
}
