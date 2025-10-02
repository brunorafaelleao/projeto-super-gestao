<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //rota principal
    public function principal()
    {
        return view('site.principal');
    }
}
