<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Http\Controllers\Coba\Foo;
use App\Http\Controllers\Controller;

class PageController extends Controller{
    // public function index(){
    //     return ('Halaman Home Admin');
    // }
    // public function tampil(){
    //     return "Data Mahasiswa Admin";
    // }
    // public function cobaFacade(){
    //    echo \Illuminate\Support\Str::snake('SedangBelajarLaravelUncover');
    //    echo "<br>";
    //    echo \Illuminate\Support\Str::kebab('SedangBelajarLaravelUncover');
    // }
    // public function cobaFacade(){
    //     echo Str::snake('SedangBelajarLaravelUncover');
    //     echo "<br>";
    //     echo Str::kebab('SedangBelajarLaravelUncover');
    //  }
    //  public function cobaClass(){
    //     echo "ini function cobaClass";
    //  } 
    //  public function cobaClass(){
    //     $foo=new \App\Http\Controllers\Coba\Foo();
    //     echo $foo ->bar();
    //  }
     public function cobaClass(){
        $foo=new Foo();
        echo $foo ->bar();
     }
}       