<?php

use App\Chat;
use Illuminate\Database\Seeder;

class ChatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chat::create([
            'iq' => "Halo",
            'ia' => "hai!",
            'ja' => "はじめまして。",
            'image' => "default.jpg",
            'voice' => "default.ogg",
        ]);
        Chat::create([
            'iq' => "Bagaimana harimu",
            'ia' => "Menyenangkan!, Kamu sendiri bagaimana?",
            'ja' => "とても楽しい。 あなた わ",
            'image' => "default.jpg",
            'voice' => "default.ogg",
        ]);
        Chat::create([
            'iq' => "Apa kabar",
            'ia' => " Hai, baik sekali. Kamu sendiri bagaimana?",
            'ja' => "はい、 げんき です。 あなた わ",
            'image' => "default.jpg",
            'voice' => "default.ogg",
        ]);
        Chat::create([
            'iq' => "Baik",
            'ia' => " Syukurlah!",
            'ja' => "良かった",
            'image' => "default.jpg",
            'voice' => "default.ogg",
        ]);
        Chat::create([
            'iq' => "Buruk",
            'ia' => " Kasihan sekali!, Apakah kamu mau permen?",
            'ja' => "かわいそう。 キャンディが欲しいですか",
            'image' => "default.jpg",
            'voice' => "default.ogg",
        ]);

    }
}
