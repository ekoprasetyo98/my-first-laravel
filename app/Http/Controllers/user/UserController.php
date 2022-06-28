<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// connect to db
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $data = DB::table('mahasiswa')->get();
        return view('user/index',['dataMahasiswa'=>$data]);
    }

    public function detail($id){
        $data = DB::table('mahasiswa')->where('id',$id)->get();
        return view('user/halaman-detail',['MahasiswaById'=>$data]);
    }

    public function proses(Request $request){
        DB::table('mahasiswa')->insert([
            'nama' => $request->nama,
            'usia' => $request->usia,
            'nik' => $request->nik,
            'jurusan' => $request->jurusan
        ]);
        return redirect('/content/data');
    }

    public function update($id){
        $data = DB::table('mahasiswa')->where('id',$id)->get();
        return view('user/halaman-edit',['dataMahasiswaById'=>$data]);
    }

    public function actUpdate(Request $request){
        DB::table('mahasiswa')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'usia' => $request->usia,
            'nik' => $request->nik,
            'jurusan' => $request->jurusan
        ]);
        return redirect('/content/data');
    }

    public function delete($id){
        DB::table('mahasiswa')->where('id',$id)->delete();
        return redirect('/content/data');
    }
}
