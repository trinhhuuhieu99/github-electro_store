<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class PagesController extends Controller
{
    //
    public function getindex()
    {
        $new_product = Product::where('new',1)->inRandomOrder()->limit(2)->get(); 
        
        return \view('pages.index', \compact('new_product') );
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

    public function getmobiles()
    {
        return view('pages.type_mobiles');
    }
    public function getaccessories()
    {
        return view('pages.type_accessories');
    }
    public function gethome()
    {
        return view('pages.type_home');
    }
}
