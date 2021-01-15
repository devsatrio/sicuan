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
        $data_setting = DB::table('web_setting')->orderby('id','desc')->limit(1)->get();
        $data_galeri = GaleriModel::orderby('id','desc')->paginate(12);
        return view('frontend.galeri',['webset'=>$data_setting,'data_galeri' => $data_galeri]);
    }

    //=================================================================
    public function artikel(){
        $data_setting = DB::table('web_setting')->orderby('id','desc')->limit(1)->get();
        $data_artikel = ArtikelModel::select(DB::raw('artikel.*,kategori_artikel.nama as namakategori'))
        ->leftjoin('kategori_artikel','kategori_artikel.id','=','artikel.id_kategori')
        ->orderby('id','desc')->paginate(12);
        return view('frontend.artikel',['webset'=>$data_setting,'data_artikel' => $data_artikel]);
    }

    //=================================================================
    public function detailartikel($slug){
        $data_setting = DB::table('web_setting')->orderby('id','desc')->limit(1)->get();
        $detail_artikel = ArtikelModel::select(DB::raw('artikel.*,kategori_artikel.nama as namakategori'))
        ->leftjoin('kategori_artikel','kategori_artikel.id','=','artikel.id_kategori')
        ->where('artikel.slug',$slug)
        ->get();
        $data_artikel = DB::table('artikel')->select(DB::raw('artikel.*,kategori_artikel.nama as namakategori'))->leftjoin('kategori_artikel','artikel.id_kategori','=','kategori_artikel.id')->inRandomOrder()->limit(6)->get();
        
        return view('frontend.detailartikel',['webset'=>$data_setting,'detail' => $detail_artikel,'artikellain'=>$data_artikel]);
    }
}
