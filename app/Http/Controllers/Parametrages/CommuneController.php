<?php

namespace App\Http\Controllers\Parametrages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommuneController extends Controller
{
    public function index()
    {
        return view('parametrages.communes.index');
    }
}
