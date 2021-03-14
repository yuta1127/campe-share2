<?php

use Illuminate\Database\Seeder;
use App\User;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            ['user_id' => User::all()->random()->id,
            'title' => 'php',
            'content' => 'テスト5',
            'created_at' => '2021-02-10 22:25:06'
            ],
            ['user_id' => User::all()->random()->id,
            'title' => 'docker',
            'content' => 'テスト6',
            'created_at' => '2021-02-10 22:32:06'
            ],
            ['user_id' => User::all()->random()->id,
            'title' => 'HTML',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => User::all()->random()->id,
            'title' => 'CSS',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => User::all()->random()->id,
            'title' => 'javascript',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => User::all()->random()->id,
            'title' => 'Ruby',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => User::all()->random()->id,
            'title' => 'Java',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => User::all()->random()->id,
            'title' => 'Python',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => User::all()->random()->id,
            'title' => 'Go',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => User::all()->random()->id,
            'title' => 'C',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => User::all()->random()->id,
            'title' => 'swift',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => User::all()->random()->id,
            'title' => 'kotlin',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => User::all()->random()->id,
            'title' => 'AWS',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => User::all()->random()->id,
            'title' => 'GCP',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => User::all()->random()->id,
            'title' => 'Azure',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => User::all()->random()->id,
            'title' => 'Redmine',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => User::all()->random()->id,
            'title' => 'Backlog',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => User::all()->random()->id,
            'title' => 'Gitlab',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => User::all()->random()->id,
            'title' => 'Source Tree',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => User::all()->random()->id,
            'title' => 'PostgreSQL',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
            ['user_id' => User::all()->random()->id,
            'title' => 'Ruby on Rails',
            'content' => 'テスト3',
            'created_at' => '2021-02-10 23:32:06'
            ],
        ]);
    }
}

