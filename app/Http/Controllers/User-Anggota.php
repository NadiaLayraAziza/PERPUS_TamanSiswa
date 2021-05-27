<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Siswa;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->level == 'user') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/');
        }

        $datas = User::paginate(10);
        return view('auth.user', compact('datas'));
    }

    public function create()
    {
        if(Auth::user()->level == 'user') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/');
        }


        $getRow = User::orderBy('id', 'DESC')->get();

        $rowCount = $getRow->count();

        $lastId = $getRow->first();

        $kode = $lastId->id+1;

        return view('auth.register', compact('kode'));

    }

    public function store(Request $request)
    {
        $count_user = User::where('username',$request->input('username'))->count();
        // $count_anggota = Anggota::where('nisn',$request->input('nisn'))->count();
        if($count_user>0){
            Session::flash('message', 'Already exist!');
            Session::flash('message_type', 'danger');
            return redirect()->to('user');
        }

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:20|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',

            // Anggota
            'nisn' => 'required|string|max:20|unique:anggota',
            'tempat_lahir' => 'required|string|max:255',

        ]);

        if($request->file('gambar') == '') {
            $gambar = NULL;
        } else {
            $file = $request->file('gambar');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
            $request->file('gambar')->move("images/user", $fileName);
            $gambar = $fileName;
        }

        User::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'level' => $request->input('level'),
            'password' => bcrypt(($request->input('password'))),
            'gambar' => $gambar
        ]);
        
        Anggota::create([
            'user_id' => $request->input('user_id'),
            'name' => $request->input('name'),
            'nisn' => $request->input('nisn'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tgl_lahir' => $request->input('tgl_lahir'),
            // 'jk' => $request->input('jk'),
            'jurusan' => $request->input('jurusan')
        ]);

        Session::flash('message', 'Berhasil ditambahkan!');
        Session::flash('message_type', 'success');

        //return
        return redirect()->route('user.index');
        //return $request->all();
    }

    public function show($id)
    {
        if((Auth::user()->level == 'user') && (Auth::user()->id != $id)) {
                Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
                return redirect()->to('/');
        }

        $data = User::findOrFail($id);

        return view('auth.show', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        if((Auth::user()->level == 'user') && (Auth::user()->id != $id)) {
                Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
                return redirect()->to('/');
        }

        $data = User::findOrFail($id);

        return view('auth.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $user_data = User::findOrFail($id);

        if($request->file('gambar'))
        {
            $file = $request->file('gambar');
            $dt = Carbon::now();
            $acak  = $file->getClientOriginalExtension();
            $fileName = rand(11111,99999).'-'.$dt->format('Y-m-d-H-i-s').'.'.$acak;
            $request->file('gambar')->move("images/user", $fileName);
            $user_data->gambar = $fileName;
        }

        $user_data->name = $request->input('name');
        $user_data->email = $request->input('email');
        if($request->input('password')) {
        $user_data->level = $request->input('level');
        }

        if($request->input('password')) {
            $user_data->password= bcrypt(($request->input('password')));

        }

        $user_data->update();

        Session::flash('message', 'Berhasil diubah!');
        Session::flash('message_type', 'success');
        return redirect()->to('user');
    }

    public function destroy($id)
    {
        if(Auth::user()->id != $id) {
            $user_data = User::findOrFail($id);
            $user_data->delete();
            Session::flash('message', 'Berhasil dihapus!');
            Session::flash('message_type', 'success');
        } else {
            Session::flash('message', 'Akun anda sendiri tidak bisa dihapus!');
            Session::flash('message_type', 'danger');
        }
        return redirect()->to('user');
    }

}