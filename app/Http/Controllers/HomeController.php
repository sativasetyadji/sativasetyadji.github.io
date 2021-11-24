<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jam;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $jams=Jam::simplePaginate(1);

        return view ('admin/home', compact('jams'));
    }
}
