<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use App\Models\Input_Aspirasi;
use App\Models\Kategori;
use App\Models\Siswa;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    //

    public function index(){
        return view('home');
    }
    
    public function form(){
        $aspirasi = Aspirasi::latest();
        $noUrut = $aspirasi->max('id_aspirasi');
        $kategori = Kategori::all();
        $id =abs($noUrut + 1);
        return View('aspirasi', [
            'title' => 'Pengaduan',
            'no' => $id,
            'kategori' => $kategori,
            
        ]);
        return view('aspirasi');
    }

    public function input(Request $request){

        $this->validate($request, [
            'nis' => 'required',
            'lokasi' => 'required',
            'ket' => 'required',
        ]);

        $data = Siswa::all()->where('nis', $request->nis)->count();

        if ($data > 0) {
            Input_Aspirasi::create([
                'Id_pelaporan' => $request->no_adu,
                'nis' => $request->nis,
                'lokasi' => $request->lokasi,
                'id_kategori' => $request->kategori,
                'ket' => $request->ket,
            ]);
            Aspirasi::create([
                'id_aspirasi' => $request->no_adu,
                'id_pelaporan' => $request->no_adu,
                'id_kategori' => $request->kategori,
            ]);
            return Redirect("/form?id=$request->no_adu");
            } else{
                return Redirect("/form?nis=$request->nis");
            }

        return view('home');
    }
}
