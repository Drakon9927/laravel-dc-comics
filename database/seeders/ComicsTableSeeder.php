<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Carica i dati dei fumetti dalla configurazione
        $comics = config('comics');

        foreach ($comics as $comic) {
            DB::table('comics')->insert([
                'title' => $comic['title'],
                'description' => $comic['description'],
                'thumb' => $comic['thumb'],
                'price' => $comic['price'],
                'series' => $comic['series'],
                'sale_date' => $comic['sale_date'],
                'type' => $comic['type'],
                'artists' => json_encode($comic['artists']),
                'writers' => json_encode($comic['writers']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}