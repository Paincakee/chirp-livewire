<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ChirpController extends Controller
{
    /**
     * Display text
     */
    public function index(): View
    {
        return view('chirps', [

        ]);
    }
}
