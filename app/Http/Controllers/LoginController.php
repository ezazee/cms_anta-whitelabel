<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Echo_;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
         return view('pages.login.index');
    }

    // public function loginCheck(Request $request){
    //     $client = new Client();
    //     $response = $client->request('POST', 'http://146.190.102.199:8000/api/antar/login', [
    //         'headers' => [
    //             'Accept' => 'application/json',
    //         ],
    //         'json' => [
    //             'username' => $request->username,
    //             'password' => $request->password,
    //         ]
    //     ]);

    //     $data = json_decode($response->getBody()->getContents());
    //     $request->session()->put('token', $data->token);
    //     return view('index', ['data' => $data]);
    // }

    // public function logout(Request $request){
    //     if(session()->has('token')){
    //         $request->session()->forget('token');
    //     }
    //     return redirect()->route('login');
    // }

}
