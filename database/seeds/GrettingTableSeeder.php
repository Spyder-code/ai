<?php

use App\Gretting;
use Illuminate\Database\Seeder;

class GrettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gretting::create([
            'ind' => "Perkenalkan Namaku Natsuki Suzuki. Senang bertemu dengan kalian!  ",
            'jpn' => "はじめまして、鈴木ナツキです。よろしくお願いします。",
            'image' => "default.jpg",
            'voice' => "perkenalan.ogg",
        ]);
        Gretting::create([
            'ind' => "Selamat pagi!",
            'jpn' => "ございます",
            'image' => "ohayo.gif",
            'voice' => "ohayo.ogg",
        ]);
        Gretting::create([
            'ind' => "Selamat siang!",
            'jpn' => "こんにちは",
            'image' => "ohayo.gif",
            'voice' => "siang.ogg",
        ]);
        Gretting::create([
            'ind' => "Selamat sore!",
            'jpn' => "こんばんは",
            'image' => "default.jpg",
            'voice' => "default.ogg",
        ]);
        Gretting::create([
            'ind' => "Selamat malam!",
            'jpn' => "おやすみなさい",
            'image' => "default.jpg",
            'voice' => "default.ogg",
        ]);
        Gretting::create([
            'ind' => "Selamat tinggal!",
            'jpn' => "さようなら",
            'image' => "default.jpg",
            'voice' => "default.ogg",
        ]);
        Gretting::create([
            'ind' => "Ya!",
            'jpn' => "はい",
            'image' => "default.jpg",
            'voice' => "default.ogg",
        ]);
        Gretting::create([
            'ind' => "Saya tidak mengerti, apa yang kamu katakan",
            'jpn' => "わかりません あなたが言うこと",
            'image' => "default.jpg",
            'voice' => "default.ogg",
        ]);
    }
}
