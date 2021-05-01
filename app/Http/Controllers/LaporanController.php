<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{

    public function index(){
        $posts= Buku::paginate(5);
        return view('admin.laporan.index',compact('posts'))->with('i',(request()->input('posts',1)-1)*5);
    }
    //Lihat html
    public function cetak_buku(){
        $posts= Buku::all();
        return view('admin.laporan.buku_pdf',compact('posts'))->with('i',(request()->input('posts',1)-1)*5);
    }

    // Cetak PDF buku
    // public function cetak_buku(){
    //     $posts = Buku::all();

    //     $pdf = PDF::loadView('admin.laporan.buku_pdf',['posts'=>$posts]);

    //     return $pdf->stream();
    // }

    // public function cetak_buku(){
    //     $dompdf = new Dompdf();
    //     $dompdf->loadHtml($aData['html']);
    //     $dompdf->set_option('isRemoteEnabled', TRUE);
    //     $dompdf->setPaper('A4', 'landscape');
    //     $dompdf->render();
    //     $dompdf->stream();
    //     $posts = Buku::all();
    //     $pdf = PDF::loadView('admin.laporan.buku_pdf',['posts'=>$posts]);

    //     return $pdf->stream();
    // }

    // Anggota
    //Lihat html
    public function cetak_anggota(){
        $posts= Anggota::all();
        return view('admin.laporan.anggota_pdf',compact('posts'))->with('i',(request()->input('posts',1)-1)*5);
    }

    // Cetak PDF
    // public function cetak_anggota(){
    //     $posts = Anggota::all();

    //     $pdf = PDF::loadView('admin.laporan.anggota_pdf',['posts'=>$posts]);

    //     return $pdf->stream();
    // }

    // Transaksi
    //Lihat html
    // public function cetak_transaksi(){
    //     $posts= Transaksi::all();
    //     return view('admin.laporan.transaksi_pdf',compact('posts'))->with('i',(request()->input('posts',1)-1)*5);
    // }

    // Cetak PDF
    public function cetak_transaksi(){
        $posts = Transaksi::all();

        $pdf = PDF::loadView('admin.laporan.transaksi_pdf',['posts'=>$posts]);

        return $pdf->stream();
    }

}
