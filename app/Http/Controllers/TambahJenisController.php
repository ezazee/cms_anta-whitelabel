<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TambahJenisController extends Controller
{
    public function AddJenis(Request $request){
        // $post = Http::post('http://146.190.102.199:8000/api/antar/jenis/create', [
        //     'nama'=>"Isi Nama Bantuan"
        // ]);
        // return $post->body();

        $data = [
            'nama' => $request->input('nama')
        ];

        $response = Http::post('http://146.190.102.199:8000/api/antar/jenis/create', $data);

        $statuscode = $response->status();
        $body = $response->json();

        return view('pages.tambah-jenis.index', $response, $statuscode, $body);
    }

    public function index() {
        return view('pages.tambah-jenis.index');
    }
}
