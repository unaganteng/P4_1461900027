<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\ExportToExcel;
use Maatwebsite\Excel\Facades\Excel;

class jenisbuku extends Controller
{
    public function index(){
        $buku = DB::table('buku')
        ->join('rak_buku', 'buku.id', '=', 'rak_buku.id_buku')
        ->join('jenis_buku', 'rak_buku.id_jenis_buku', '=', 'jenis_buku.id')
        ->select('rak_buku.id', 'buku.judul', 'jenis_buku.jenis' , 'buku.tahun_terbit')
        ->get();
        return view('home0027',['buku'=>$buku]);
    }
    public function carijoin(Request $request){
        $carijoin = $request->lihat;
        $buku = DB::table('buku')
        ->join('rak_buku', 'buku.id', '=', 'rak_buku.id_buku')
        ->join('jenis_buku', 'rak_buku.id_jenis_buku', '=', 'jenis_buku.id')
        ->select('rak_buku.id', 'buku.judul', 'jenis_buku.jenis' , 'buku.tahun_terbit')
        ->where('judul','like',"%".$carijoin."%")->paginate();
        return view('home0027',['buku'=>$buku]);
    }
    public function export()
    {
        return Excel::download(new ExportToExcel, 'Data_1461900027.xlsx');
    }
}
