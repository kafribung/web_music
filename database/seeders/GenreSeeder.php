<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = collect([
            'dangdut',
            'pop',
            'jazz',
            'rock',
            'nasional',
            'reggae',
            'indie',
            'klasik',
        ]);

        $genres->each(function($genre){
            Genre::create([
                'name' => $genre,
                'slug' => \Str::slug($genre),
            ]);
        });
    }
}
