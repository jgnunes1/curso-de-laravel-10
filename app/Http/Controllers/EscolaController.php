<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EscolaController extends Controller
{
    public function apresentacao()
    {
        return view('apresentacao');
    }
}
