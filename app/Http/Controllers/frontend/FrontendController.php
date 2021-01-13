<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\backend\GaleriModel;
use App\models\backend\ArtikelModel;
use App\models\backend\SliderModel;
use Image;
use File;
use DB;


class FrontendController extends Controller
{

    //=================================================================
    public function index()
    {
        $data = GaleriModel::orderby('id','desc')->limit(6)->get();
        $fitur = DB::table('fitur')->orderby('id','desc')->get();
        $data_artikel = DB::table('artikel')->select(DB::raw('artikel.*,kategori_artikel.nama as namakategori'))->leftjoin('kategori_artikel','artikel.id_kategori','=','kategori_artikel.id')->orderby('id','desc')->limit(6)->get();
        $count_slider = DB::table('slider')->count();
        $data_slider = SliderModel::orderby('id','desc')->limit(1)->get();
        $data_setting = DB::table('web_setting')->orderby('id','desc')->limit(1)->get();
        return view('frontend.home',['webset'=>$data_setting,'data'=>$data,'fitur'=>$fitur ,'setting'=>$data_setting, 'hitung'=>$count_slider , 'slider'=>$data_slider , 'artikel'=>$data_artikel]);
    }

    //=================================================================
    public function galeri(){
        
        $data_galeri = GaleriModel::orderby('id','desc')->paginate(16);
        return view('frontend.galeri',['data_galeri' => $data_galeri]);
    }

    //=================================================================
    public function artikel(){
        
        $data_artikel = ArtikelModel::select(DB::raw('artikel.*,kategori_artikel.nama as namakategori'))
        ->leftjoin('kategori_artikel','kategori_artikel.id','=','artikel.id_kategori')
        ->orderby('id','desc')->paginate(16);
        return view('frontend.artikel',['data_artikel' => $data_artikel]);
    }

    //=================================================================
    public function detailartikel($slug){
        $detail_artikel = ArtikelModel::select(DB::raw('artikel.*,kategori_artikel.nama as namakategori'))
        ->leftjoin('kategori_artikel','kategori_artikel.id','=','artikel.id_kategori')
        ->where('artikel.slug',$slug)
        ->get();

        return view('frontend.detailartikel',['detail' => $detail_artikel]);
    }
}
