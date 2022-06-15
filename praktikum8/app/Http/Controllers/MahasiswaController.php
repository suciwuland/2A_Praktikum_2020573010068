<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class MahasiswaController extends Controller
{
    public function massDelete(){
        $mahasiswa = Mahasiswa::where('ipk','>',2)->delete();
        dump($mahasiswa);
    }   
    public function delete(){
        $mahasiswa = Mahasiswa::find(1);
        $mahasiswa -> delete();
        dump($mahasiswa);
    }   
    public function destroy(){
        $mahasiswa = Mahasiswa::destroy(1);
        dump($mahasiswa);
    } 
    public function massUpdate(){
        Mahasiswa::where('nim','2020573010068')->first()->update([
            'tanggal_lahir' => '2002-10-24',
            'ipk' => 2.1,
        ]);
        return "Berhasil di proses";
    }
    public function update(){
        $mahasiswa = Mahasiswa::find(1);
        $mahasiswa -> tanggal_lahir = '2001-01-01';
        $mahasiswa ->ipk = 2.9;
        $mahasiswa ->save();

        dump($mahasiswa);
    }
    public function updateWhere(){
        $mahasiswa = Mahasiswa::where('nim','2020573010068')->first();
        $mahasiswa -> tanggal_lahir = '2002-06-24';
        $mahasiswa ->ipk = 4.0;
        $mahasiswa ->save();

        dump($mahasiswa);
    }
    public function massAssignment2(){
        $mahasiswa1 = Mahasiswa::create(
            [
            'nim' => '1900662',
            'nama' => 'Rina Kumala Sari',
            'tanggal_lahir'=> '2000-06-28',
            'ipk'=> 3.4,
            ]);
        dump($mahasiswa1);

        $mahasiswa2 = Mahasiswa::create(
            [
                'nim'=> '18012012',
                'nama'=> 'James Situmorang',
                'tanggal_lahir'=>'1999-04-02',
                'ipk'=>2.7,
            ]);
            dump($mahasiswa2);
        $mahasiswa3 =Mahasiswa::create(
            [
                'nim' => '19005011',
                'nama'=> 'Riana Putria',
                'tanggal_lahir'=> '2000-11-23',
                'ipk'=>2.9,
            ]);
            dump($mahasiswa3);
    }
    public function massAssignment(){
        Mahasiswa::create(
            [
                'nim'=> '19021044',
                'nama'=> 'Rudi Permana',
                'tanggal_lahir'=>'2000-08-22',
                'ipk'=>2.5,
            ]
            );
        return "Berhasil di proses";
    }
    public function insert(){
        $mahasiswa = new  Mahasiswa;
        $mahasiswa->nim='2020573010068';
        $mahasiswa->nama='Suci Wulan Dari';
        $mahasiswa->tanggal_lahir= '2002-06-24';
        $mahasiswa->ipk= 3.6;
        $mahasiswa->save();

        dump($mahasiswa);
    } 
}
// public function cekObject(){
//         $mahasiswa= new Mahasiswa;

//         dump($mahasiswa);
//     }
// public function insert(){
    //     $result = DB::table('mahasiswas')->insert(
    //         ['nim'=> '2020573010068',
    //         'nama'=> 'Suci Wulan Dari',
    //         'tanggal_lahir'=> '2002-06-24',
    //         'ipk'=> '3,6',
    //         'created_at'=> now(),
    //         'updated_at'=> now(),
    //         ]
    //     );
    // }
    