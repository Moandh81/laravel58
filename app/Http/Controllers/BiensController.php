<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiensController extends Controller
{


    public function getAddBiens() {

     return view('addBien');

    }


    public function postAddBiens(Request $request) {


       dd($request);




    }
}
