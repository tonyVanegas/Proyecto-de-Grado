<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home2Controller extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(view:'home2.index');
    }
}
