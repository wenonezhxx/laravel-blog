<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    public function run(): void
    {
        $images = [];
        for ($i = 1; $i <= 12; $i++) {
            $images[] = [
                'title' => "Art $i",
                'description' => "Описание картинки №$i",
                'filename' => "photo$i.jpeg",
            ];
        }
        DB::table('images')->insert($images);
    }
}