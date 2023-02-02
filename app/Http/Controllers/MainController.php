<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saint;

class MainController extends Controller
{
    public function home(){

        $saints = Saint::all();

        $data = [
            'Saints' => $saints
        ];

        return view('pages.home', $data);
    }
}
