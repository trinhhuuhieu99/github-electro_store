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

    public function getabout()
    {
        return \view('pages.about');
    }

    public function getdetail()
    {
        return view('pages.detail');
        
    }

    public function getmail()
    {
        return view('pages.mail');
    }
}
