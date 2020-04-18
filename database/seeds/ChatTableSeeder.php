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
            'eq' => "Hello",
            'ea' => "Hi!",
            'jq' => "はじめまして。",
            'ja' => "はじめまして。",
            'image' => "default.jpg",
            'voice' => "default.ogg",
        ]);
    }
}
