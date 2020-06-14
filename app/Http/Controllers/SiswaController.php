<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $siswa = DB::table('students')->get();
        $siswa =  DB::table('siswa')
        ->Join('jurusans', 'siswa.id_jurusan', '=', 'jurusans.id_jurusan')
        ->get();
        return view('siswa.index', ['siswa' => $siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahSiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('siswa')->insert([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'email' => $request->email,
            'id_jurusan' => $request->jurusan,

        ]);  
        return redirect('/siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mengambil data siswa berdasarkan id yang dipilih
        $siswa = DB::table('siswa')
        ->Join('jurusans', 'siswa.id_jurusan', '=', 'jurusans.id_jurusan')
        ->where('id_siswa',$id)->get();
        return view('editsiswa', ['data' => $siswa]);
        //return $siswa;
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
        DB::table('siswa')->where('id_siswa', $id)->update([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'email' => $request->email
        ]);
        return redirect('/siswa')->with('status', 'Data Siswa Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('siswa')->where('id_siswa',$id)->delete();
        return redirect('/siswa');
    }
}
