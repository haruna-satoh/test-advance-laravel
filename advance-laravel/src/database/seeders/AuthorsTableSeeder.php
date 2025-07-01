<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $paramを定義
        $param = [
            // nameカラムにtonyを追加
            'name' =>'tony',
            // ageカラムに35を追加
            'age' => 35,
            // nationalityカラムにAmericanを追加
            'nationality' => 'American'
        ];
        // $paramのデータをinsertメソッドでauthorsテーブルのデータベースに入れる
        DB::table('authors')->insert($param);
        // $paramを定義
        $param = [
            // nameカラムにjackを追加
            'name' => 'jack',
            // ageカラムに20を追加
            'age' => 20,
            // nationalityカラムにBritishを追加
            'nationality' => 'British'
        ];
        // $paramのデータをinsertメソッドでauthorsテーブルのデータベースに入れる
        DB::table('authors')->insert($param);
        // $paramを定義
        $param = [
            // nameカラムにsaraを追加
            'name' => 'sara',
            // ageカラムに45を追加
            'age' => 45,
            // nationalityカラムにEgyptianを追加
            'nationality' => 'Egyptian'
        ];
        // $paramのデータをinsertメソッドでauthorsテーブルのデータベースに入れる
        DB::table('authors')->insert($param);
        // $paramを定義
        $param = [
            //nameカラムにsalyを追加
            'name' => 'saly',
            // ageカラムに31を追加
            'age' => 31,
            // nationalityカラムにChineseを追加
            'nationality' => 'Chinese'
        ];
        // $paramのデータをinsertメソッドを使ってauthorsテーブルのデータベースに入れる
        DB::table('authors')->insert($param);
    }
}
