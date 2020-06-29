<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getindex()
    {
        return \view('pages.index') ;
    }

    public function getdetail()
    {
        return view('pages.detail');
        
    }
}
