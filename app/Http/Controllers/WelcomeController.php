<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
}
public function about() {
    return '244107020127|Aryaputra Ferdiananta';
}
public function articles() {
    return 'Halaman Artikel dengan';
}
}
