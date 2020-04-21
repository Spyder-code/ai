<?php

namespace App\Http\Controllers;

use App\Chat;
use App\Gretting;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use DateTime;
use DateTimeZone;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $request->session()->forget('nama');
        date_default_timezone_set("Asia/Jakarta");
        $time = date('h:i:s');
        $hour = date('H');

        if($hour>=02&&$hour<=9){
            $perkenalan = Gretting::all()->where('id',1);
            $greet = Gretting::all()->where('id',2);
            return view('index',compact('greet','perkenalan'));
        }else if($hour>=10&&$hour<=14){
            $perkenalan = Gretting::all()->where('id',1);
            $greet = Gretting::all()->where('id',3);
            return view('index',compact('greet','perkenalan'));
        }else if($hour>=15&&$hour<=19){
            $perkenalan = Gretting::all()->where('id',1);
            $greet = Gretting::all()->where('id',4);
            return view('index',compact('greet','perkenalan'));
        }else if($hour>=20&&$hour<=24){
            $perkenalan = Gretting::all()->where('id',1);
            $greet = Gretting::all()->where('id',5);
            return view('index',compact('greet','perkenalan'));
        }else if($hour>=00&&$hour<=01){
            $perkenalan = Gretting::all()->where('id',1);
            $greet = Gretting::all()->where('id',5);
            return view('index',compact('greet','perkenalan'));
        }
    }

    public function main(Request $request)
    {
        $nama = $request->session()->get('nama');
        if($nama==null){
            return redirect('/');
        }else{
            return view('main');
        }
    }

    public function nama(Request $request)
    {
        $request->session()->put('nama',$request->nama);
        $nama =  $request->session()->get('nama');
        return response($nama);
    }

    public function search(Request $request)
    {
        // if($request->ajax()){
        //     $output = "";
        // }
        $nama = $request->nama;
        $kosong = Gretting::where('id',8)->get();
        $data = Chat::query()->where('iq','LIKE', "%{$nama}%")
        ->get();
        foreach($kosong as $item){
            $output = '<h1>'.$item->jpn.'</h1>'.
            '<p>'.$item->ind.'</p>';
        }
        if($data){
            foreach($data as $item){
                $output = '<h1>'.$item->ja.'</h1>'.
                            '<p>'.$item->ia.'</p>';
            }
        }
        return response($output);

    }

    }

