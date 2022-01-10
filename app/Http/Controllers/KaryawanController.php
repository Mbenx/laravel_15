<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{

    public function index()
    {
        $karyawan = DB::table('karyawan')->get();

        // dd($karyawan);

        return view('karyawan.home',[
            'data' => $karyawan
        ]);
    }

    public function create()
    {
        return view('karyawan.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        DB::table('karyawan')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
        ]);

        return redirect('/karyawan');
    }

    public function edit($id)
    {
        $data = DB::table('karyawan')->where('id','=',$id)->first();
        return view('karyawan.edit',[
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        // dd($request);
        DB::table('karyawan')
            ->where('id','=',$request->id)
            ->update([
                'nama' => $request->nama,
                'alamat' => $request->alamat,
                'jabatan' => $request->jabatan,
            ]);

        return redirect('/karyawan');
    }

    public function destroy($id)
    {
        DB::table('karyawan')->where('id','=',$id)->delete();
        return redirect('/karyawan');
    }
}
