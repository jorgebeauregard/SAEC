<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrnController extends Controller
{
    public function index()
    {
        $logged = Auth::user()->profesor[0];
        $grupos = $logged->crns;

        return view('profesor.grupos.index', compact('grupos'));
    }
}
