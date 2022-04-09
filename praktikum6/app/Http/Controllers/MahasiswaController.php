<?php

namespace App\Http\Controllers;
class MahasiswaController extends Controller
{
    public function mahasiswa(){
    $arrMahasiswa=["Luhut Panjaitan","Jokowi","Vladimir Putin","Lisa Permata"];
    return view('mahasiswa')->with('mahasiswa',$arrMahasiswa);
    }
    public function dosen(){
    $arrDosen=["Maya Fitriani, M.M.","Prof. Silvia Nst,M.Farm.",
    "Dr. Umar Agustinus","Dr.Syahrial,M.Kom."];
    return view('dosen')->with('dosen',$arrDosen);
    } 
    public function gallery(){
    return view('gallery');
    }
    public function informasi($jurusan, $prodi){
    $data=[$jurusan,$prodi];
    return view('informasi')->with('data',$data);
    }
}
