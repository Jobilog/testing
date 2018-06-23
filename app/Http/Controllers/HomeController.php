<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Main');
    }

     public function showAbout()
    {
        return view('about');
    }

      public function showLocation()
    {
        return view('location');
    }
     public function showImport()
    {
        return view('import');
    }
 public function showExport()
    {
        return view('export');
    }
    public function showDomestic()
    {
        return view('domestic');
    }
     public function showQuote()
    {
        return view('quote');
    }
}
