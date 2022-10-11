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
            'content' => "Pour commencer voici le contenu du premier article",
        ],
        ['title' => "Le second article",
            'content' => "Ensuite voici le contenu du second article",
        ],
        ['title' => "Le troisieme article",
            'content' => "Et pour finir voici le contenu du troisième article",
        ],
        ]);
    }
}
