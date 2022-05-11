<?php
namespace App\Http\Controllers;
    // class PageController extends Controller{
    //     public function index(){
    //         return "Halaman Home";
    //     }
    //     public function tampil(){
    //         return "Data Mahasiswa";
    //     }
    // }
    // class PageController extends Controller{
    //     public function index(){
    //         return view('welcome');
    //     }
    //     public function tampil(){
    //         return "Data Mahasiswa";
    //     }
    // }
    class PageController extends Controller{
        public function index(){
            return view('welcome');
        }
        public function tampil(){
            $arrMahasiswa=["Megawati","Luhut Panjaitan",
            "Susilo Bambang Kusumo","Prabowo Subianto"];
            return view('mahasiswa')->with('mahasiswa',$arrMahasiswa);
        }
    }