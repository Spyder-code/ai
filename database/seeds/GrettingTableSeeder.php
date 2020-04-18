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
            'ind' => "Perkenalkan nama saya maid~chan",
            'jpn' => "はじめまして 私の名前は～です みか",
            'image' => "default.jpg",
            'voice' => "default.ogg",
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
    }
}
