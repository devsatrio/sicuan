<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class FiturController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //=================================================================
    public function index()
    {
        $data = DB::table('fitur')->orderby('id','desc')->get();
        return view('backend.fitur.index',['data'=>$data]);
    }

    //=================================================================
    public function store(Request $request)
    {
        DB::table('fitur')
        ->insert([
            'header'=>$request->header,
            'isi'=>$request->isi,
            'icon'=>$request->icon,
        ]);
        return redirect('fitur')->with('status','Data berhasil disimpan');
    }

    //=================================================================
    public function update(Request $request, $id)
    {
        DB::table('fitur')
        ->where('id',$id)
        ->update([
            'header'=>$request->header,
            'isi'=>$request->isi,
            'icon'=>$request->icon,
        ]);
        return redirect('fitur')->with('status','Data berhasil diperbarui');
    }

    //=================================================================
    public function destroy($id)
    {
        DB::table('fitur')->where('id',$id)->delete();
        return redirect('fitur')->with('status','Data berhasil dihapus');
    }
}
