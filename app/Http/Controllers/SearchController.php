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
    public function index()
    {
        date_default_timezone_set("Asia/Jakarta");
        $time = date('h:i:s');
        $hour = date('H');

        if($hour>=02&&$hour<=9){
            $greet = Gretting::all()->where('id',2);
            return view('index',compact('greet'));
        }else if($hour>=10&&$hour<=14){
            $greet = Gretting::all()->where('id',3);
            return view('index',compact('greet'));
        }else if($hour>=15&&$hour<=19){
            $greet = Gretting::all()->where('id',4);
            return view('index',compact('greet'));
        }else if($hour>=20&&$hour<=24){
            $greet = Gretting::all()->where('id',5);
            return view('index',compact('greet'));
        }else if($hour>=00&&$hour<=01){
            $greet = Gretting::all()->where('id',5);
            return view('index',compact('greet'));
        }
    }

    public function main()
    {
        return view('main');
    }

    public function search(Request $request)
    {
        $nama = $request->nama;
        $data = Chat::query()->where('iq','LIKE', "%{$nama}%")
        ->orWhere('eq','LIKE', "%{$nama}%")
        ->orWhere('jq','LIKE', "%{$nama}%")
        ->get();
        return response()->json(['success' => $data]);

    }

    }

