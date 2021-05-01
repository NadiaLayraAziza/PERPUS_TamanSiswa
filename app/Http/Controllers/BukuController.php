<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $posts= Buku::orderBy('id','asc')->paginate(5);
        // return view('admin.buku.index',compact('posts'))->with('i',(request()->input('posts',1)-1)*5);

        if($request->has('search')){ // Pemilihan jika ingin melakukan pencarian
            $posts= Buku::where('judul', 'like', "%".$request->search."%")
            ->orwhere('pengarang', 'like', "%".$request->search."%")
            ->orwhere('penerbit', 'like', "%".$request->search."%")
            ->orwhere('tahun_terbit', 'like', "%".$request->search."%")
            ->orwhere('isbn', "%".$request->search."%")
            ->orwhere('jumlah_buku', 'like', "%".$request->search."%")
            ->orwhere('lokasi', 'like', "%".$request->search."%")
            ->orwhere('tgl_input', 'like', "%".$request->search."%")
            ->paginate();
        } else { // Pemilihan jika tidak melakukan pencarian
            //fungsi eloquent menampilkan data menggunakan pagination
            $posts= Buku::paginate(5); // Pagination menampilkan 5 data
        }
        return view('Admin.Buku.index',compact('posts'))->with('i',(request()->input('posts',1)-1)*5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'pengarang'=>'required',
            'penerbit'=>'required',
            'tahun_terbit'=>'required',
            'isbn'=>'required',
            'jumlah_buku'=>'required',
            'lokasi'=>'required',
            'tgl_input'=>'required'
            ]);

        //fungsieloquentuntukmenambahdata
        Buku::create($request->all());
        //jikadataberhasilditambahkan,akankembalikehalamanutama
        return redirect()->route('buku.index')->with('success','Buku Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::where('id', $id)->first();
        return view('admin.buku.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Buku = Buku::where('id', $id)->first();
        return view('Admin.buku.ubah', compact('Buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul'=>'required',
            'pengarang'=>'required',
            'penerbit'=>'required',
            'tahun_terbit'=>'required',
            'isbn'=>'required',
            'jumlah_buku'=>'required',
            'lokasi'=>'required',
            'tgl_input'=>'required'
            ]);

        //fungsi eloquent untuk menambah data
        Buku::create($request->all());
        //jikadataberhasilditambahkan,akankembalikehalamanutama
        return redirect()->route('buku.index')->with('success','Buku Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Buku::find($id)->delete();
        return redirect()->route('buku.index')
            -> with('success', 'Buku Berhasil Dihapus');
    }
}
