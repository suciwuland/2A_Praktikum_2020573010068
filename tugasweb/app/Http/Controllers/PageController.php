<?php

namespace App\Http\Controllers;
class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function profile()
    {
        $arrProf=["Suci Wulan Dari","TI-2A", "Teknologi Informasi dan Komputer", "Teknik Informatika",
         "Politeknik Negeri Lhokseumawe" ];
        return view('profile')->with('profile', $arrProf);
    }
    public function product()
    {
        $arrProduct=["Pakaian","Sepatu", "Tas", "Aksesoris"];
        return view('product')->with('product', $arrProduct);
    }
    public function contact()
    {
        $arrContact=["Suci Wulan Dari","suciwd3@gmail.com", "085247941529", ];
        return view('contact')->with('contact', $arrContact);
    }
}
