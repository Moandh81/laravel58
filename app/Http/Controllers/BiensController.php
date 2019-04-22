<?php

namespace App\Http\Controllers;

use App\Bien;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

class BiensController extends Controller
{


    public function getAddBiens() {

     return view('addBien');

    }


    public function postAddBiens(Request $request) {




        dd($request);


}
