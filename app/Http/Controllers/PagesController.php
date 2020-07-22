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

    public function getdetail($type)
    {
        $pr_detail= Product::where('id',$type)->first();

        $pr_other_detail= Product::where('id','<>',$type)->get();

        return view('pages.detail', ['pr_detail' => $pr_detail, 'pr_other_detail' => $pr_other_detail] );
        
    }

    public function getmail()
    {
        return view('pages.mail');
    }

    public function getmobiles($type)
    {
        $pr_type_mobile= Product::where('id_type',$type)->get();
        
        $pr_other_mobile= Product::where('id_type','<>',$type)->inRandomOrder()->limit(8)->get();

        return view('pages.type_mobiles', ['pr_type_mobile' => $pr_type_mobile, 'pr_other_mobile' => $pr_other_mobile ]);
    }
    public function getcomputer($type)
    {
        $pr_type_computer= Product::where('id_type',$type)->get();

        $pr_other_computer= Product::where('id_type','<>',$type)->inRandomOrder()->limit(8)->get();

        return view('pages.type_computers',['pr_type_computer' => $pr_type_computer, 'pr_other_computer' => $pr_other_computer ]);
    }
    public function gethome($type)
    {
        $pr_type_home= Product::where('id_type',$type)->get();
        
        $pr_other_home= Product::where('id_type','<>',$type)->inRandomOrder()->limit(8)->get();

        return view('pages.type_home', ['pr_type_home' => $pr_type_home, 'pr_other_home' => $pr_other_home ] );
    }
}
