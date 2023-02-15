<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListJudulController extends Controller
{
    public function index() {
        return view('pages.list-judul.index');
    }

    public function detail() {
        return view('pages.list-judul.detail');
    }
}
