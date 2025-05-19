<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articolo;

class PublicController
{
    public function homepage()
    {
        return view('homepage');
    }
}
