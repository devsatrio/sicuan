<?php
namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class FrontendController extends Controller
{

    //=================================================================
    public function index()
    {
        $webset = DB::table('web_setting')->limit(1)->get();
        $slider = DB::table('slider')->limit(1)->orderby('id','desc')->get();
        return view('frontend.index',['webset'=>$webset,'slider'=>$slider]);
    }
}
