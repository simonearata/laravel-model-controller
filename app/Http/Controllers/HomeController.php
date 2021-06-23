<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $moviestore = Movie::all();
        dump($moviestore);
        $data = [
            'moviestore' => $moviestore
        ];
        return view('home', $data);
    }
}
