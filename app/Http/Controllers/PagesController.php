<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class PagesController extends Controller
{
    //
    public function getindex()
    {
        $new_product = Product::where('new',1)->inRandomOrder()->limit(8)->get();

        $mobiles_tab = Product::where('id_type',1)->inRandomOrder()->limit(3)->get();

        $laptop_tab = Product::where('id_type',4)->inRandomOrder()->limit(3)->get();

        $tablet_tab = Product::where('id_type',6)->inRandomOrder()->limit(3)->get();

        $watch_tab = Product::where('id_type',3)->inRandomOrder()->limit(3)->get();

        $camera_tab = Product::where('id_type',8)->inRandomOrder()->limit(3)->get();
        
        $house_tab = Product::whereIn('id_type', ['9', '7'])->inRandomOrder()->limit(3)->get();
        
        return \view('pages.index', \compact('new_product', 'mobiles_tab', 'laptop_tab', 'tablet_tab', 'watch_tab','camera_tab', 'house_tab' ) );
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
