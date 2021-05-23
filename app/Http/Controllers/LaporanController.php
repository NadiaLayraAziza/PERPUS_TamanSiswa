<?php

namespace App\Http\Controllers;

use App\Exports\BukuExport;
use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use Excel;

class LaporanController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('laporan.buku');
    }

    public function buku()
    {
        return view('Baru.Admin.Laporan.buku');
    }

    public function bukuPdf()
    {

        $datas = Buku::all();
        $pdf = PDF::loadView('Baru.Admin.Laporan.buku_pdf', compact('datas'));
         return $pdf->download('Baru.Admin.Laporan.buku_pdf'.date('Y-m-d_H-i-s').'.pdf');
        //return view('Baru.Admin.Laporan.buku_pdf', compact('datas'));
    }

    public function bukuExcel(Request $request)
    {
//         $nama = 'laporan_buku_'.date('Y-m-d_H-i-s');
//         Excel::create($nama, function ($excel) use ($request) {
//         $excel->sheet('Laporan Data Buku', function ($sheet) use ($request) {

//         $sheet->mergeCells('A1:H1');

//        // $sheet->setAllBorders('thin');
//         $sheet->row(1, function ($row) {
//             $row->setFontFamily('Calibri');
//             $row->setFontSize(11);
//             $row->setAlignment('center');
//             $row->setFontWeight('bold');
//         });

//         $sheet->row(1, array('LAPORAN DATA BUKU'));

//         $sheet->row(2, function ($row) {
//             $row->setFontFamily('Calibri');
//             $row->setFontSize(11);
//             $row->setFontWeight('bold');
//         });

//         $datas = Buku::all();

//        // $sheet->appendRow(array_keys($datas[0]));
//         $sheet->row($sheet->getHighestRow(), function ($row) {
//             $row->setFontWeight('bold');
//         });

//          $datasheet = array();
//          $datasheet[0]  =   array("NO", "JUDUL", "ISBN", "PENGARANG",  "PENERBIT","TAHUN TERBIT","JUMLAH BUKU", "LOKASI");
//          $i=1;

//         foreach ($datas as $data) {

//             // $sheet->appendrow($data);
//             $datasheet[$i] = array($i,
//                         $data['judul'],
//                         $data['isbn'],
//                         $data['pengarang'],
//                         $data['penerbit'],
//                         $data['tahun_terbit'],
//                         $data['jumlah_buku'],
//                         $data['lokasi']
//                     );

//             $i++;
//         }

//         $sheet->fromArray($datasheet);
//     });

// })->export('xls');

     return Excel::download(new BukuExport, 'buku.xlsx');

    }

    public function anggota()
    {
        return view('Baru.Admin.Laporan.buku');
    }

    public function anggotaPDF()
    {

        $datas = Anggota::all();
        $pdf = PDF::loadView('Baru.Admin.Laporan.anggota_pdf', compact('datas'));
        return $pdf->download('Baru.Admin.Laporan.anggota_pdf'.date('Y-m-d_H-i-s').'.pdf');
        // return view('Baru.Admin.Laporan.anggota_pdf', compact('datas'));
    }

    public function anggotaExcel(Request $request)
    {
//         $nama = 'laporan_anggota_'.date('Y-m-d_H-i-s');
//         Excel::create($nama, function ($excel) use ($request) {
//         $excel->sheet('Laporan Data Anggota', function ($sheet) use ($request) {

//         $sheet->mergeCells('A1:H1');

//        // $sheet->setAllBorders('thin');
//         $sheet->row(1, function ($row) {
//             $row->setFontFamily('Calibri');
//             $row->setFontSize(11);
//             $row->setAlignment('center');
//             $row->setFontWeight('bold');
//         });

//         $sheet->row(1, array('LAPORAN DATA ANGGOTA'));

//         $sheet->row(2, function ($row) {
//             $row->setFontFamily('Calibri');
//             $row->setFontSize(11);
//             $row->setFontWeight('bold');
//         });

//         $datas = Buku::all();

//        // $sheet->appendRow(array_keys($datas[0]));
//         $sheet->row($sheet->getHighestRow(), function ($row) {
//             $row->setFontWeight('bold');
//         });

//          $datasheet = array();
//          $datasheet[0]  =   array("NO", "JUDUL", "ISBN", "PENGARANG",  "PENERBIT","TAHUN TERBIT","JUMLAH BUKU", "LOKASI");
//          $i=1;

//         foreach ($datas as $data) {

//             // $sheet->appendrow($data);
//             $datasheet[$i] = array($i,
//                         $data['judul'],
//                         $data['isbn'],
//                         $data['pengarang'],
//                         $data['penerbit'],
//                         $data['tahun_terbit'],
//                         $data['jumlah_buku'],
//                         $data['lokasi']
//                     );

//             $i++;
//         }

//         $sheet->fromArray($datasheet);
//     });

// })->export('xls');

    return Excel::download(new AnggotaExport, 'anggota.xlsx');

    }


    public function transaksi()
    {
        return view('laporan.transaksi');
    }


    public function transaksiPdf(Request $request)
    {
        $q = Transaksi::query();

        if($request->get('status'))
        {
             if($request->get('status') == 'pinjam') {
                $q->where('status', 'pinjam');
            } else {
                $q->where('status', 'kembali');
            }
        }

        if(Auth::user()->level == 'user')
        {
            $q->where('anggota_id', Auth::user()->anggota->id);
        }

        $datas = $q->get();

        $datas = Transaksi::all();
        $pdf = PDF::loadView('Baru.Admin.Laporan.transaksi_pdf', compact('datas'));
        return $pdf->download('Baru.Admin.Laporan.transaksi_pdf'.date('Y-m-d_H-i-s').'.pdf');
        // return view('Baru.Admin.Laporan.transaksi_pdf', compact('datas'));
    }


    public function transaksiExcel(Request $request)
    {
        $nama = 'laporan_transaksi_'.date('Y-m-d_H-i-s');
        Excel::create($nama, function ($excel) use ($request) {
        $excel->sheet('Laporan Data Transaksi', function ($sheet) use ($request) {

        $sheet->mergeCells('A1:H1');

       // $sheet->setAllBorders('thin');
        $sheet->row(1, function ($row) {
            $row->setFontFamily('Calibri');
            $row->setFontSize(11);
            $row->setAlignment('center');
            $row->setFontWeight('bold');
        });

        $sheet->row(1, array('LAPORAN DATA TRANSAKSI'));

        $sheet->row(2, function ($row) {
            $row->setFontFamily('Calibri');
            $row->setFontSize(11);
            $row->setFontWeight('bold');
        });

        $q = Transaksi::query();

        if($request->get('status'))
        {
             if($request->get('status') == 'pinjam') {
                $q->where('status', 'pinjam');
            } else {
                $q->where('status', 'kembali');
            }
        }

        if(Auth::user()->level == 'user')
        {
            $q->where('anggota_id', Auth::user()->anggota->id);
        }

        $datas = $q->get();

       // $sheet->appendRow(array_keys($datas[0]));
        $sheet->row($sheet->getHighestRow(), function ($row) {
            $row->setFontWeight('bold');
        });

         $datasheet = array();
         $datasheet[0]  =   array("NO", "KODE TRANSAKSI", "BUKU", "PEMINJAM",  "TGL PINJAM","TGL KEMBALI","STATUS", "KET");
         $i=1;

        foreach ($datas as $data) {

           // $sheet->appendrow($data);
          $datasheet[$i] = array($i,
                        $data['kode_transaksi'],
                        $data->buku->judul,
                        $data->anggota->nama,
                        date('d/m/y', strtotime($data['tgl_pinjam'])),
                        date('d/m/y', strtotime($data['tgl_kembali'])),
                        $data['status'],
                        $data['ket']
                    );

          $i++;
        }

        $sheet->fromArray($datasheet);
    });

})->export('xls');

}

}
