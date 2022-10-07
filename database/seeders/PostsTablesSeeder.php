<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
        ['title' => "Le premier article",
            'content' => "Voici le contenu de l'article",
        ],
        ['title' => "Le second article",
            'content' => "Voici le contenu de l'article",
        ],
        ['title' => "Le troisieme article",
            'content' => "Voici le contenu de l'article",
        ],
        ]);
    }
}
