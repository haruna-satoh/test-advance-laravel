<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // callメソッドでAuthorsTableSeederを指定し、シーディング処理を実行する設定
        $this->call(AuthorsTableSeeder::class);
    }
}
