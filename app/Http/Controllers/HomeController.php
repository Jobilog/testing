<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Create;

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
     public function showAll()
    {
        $records=Create::all();
        return view('view')->with('records',$records);
    }
    public function showRecord(Request $request)
    {
        $Create=new Create;

        $Create->name = $request->get('name');
        $Create->address = $request->get('address');
        $Create->phone = $request->get('phone');
        $Create->company = $request->get('company');
        $Create->email = $request->get('email');
        $Create->city = $request->get('city');
        $Create->transaction = $request->get('transaction');
          //shipment
        $Create->mode = $request->get('mode');
        $Create->contype = $request->get('contype');
        $Create->weight = $request->get('weight');
        $Create->height = $request->get('height');
        $Create->width = $request->get('width');
        $Create->length = $request->get('length');
        $Create->quantity = $request->get('quantity');
        $Create->commodity = $request->get('commodity');
        //consignee
        $Create->con_name = $request->get('con_name');
        $Create->con_add = $request->get('con_add');
        $Create->con_phone = $request->get('con_phone');
        $Create->con_country = $request->get('con_country');
        $Create->con_email = $request->get('con_email');
       
       $Create->save();

       return redirect()->back();
    }
}
