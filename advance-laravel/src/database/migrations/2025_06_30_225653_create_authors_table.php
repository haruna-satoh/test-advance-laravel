<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // データベースに新しいテーブルやカラムを追加する
    public function up()
    {
        // テーブル名を'authors'に設定
        Schema::create('authors', function (Blueprint $table) {
            // idメソッドを使って主キーカラムを作成
            $table->id();
            // stringメソッドを使って,100文字以内で文字列型のnameカラムを作成
            $table->string('name', 100);
            // integerメソッドを使って、数値型のageカラムを作成
            $table->integer('age');
            // stringメソッドを使って、100文字以内で文字列型のnationalityカラムを作成
            $table->string('nationality', 100);
            // timestampメソッドを使って、タイムスタンプのカラムを作成。レコード作成された時刻を格納する設定
            $table->timestamp('created_at')->useCurrent()->nullable();
            // timestampメソッドを使って、タイムスタンプのカラムを作成。レコードが最後に更新された時刻を格納する設定
            $table->timestamp('updated_at')->useCurrent()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // マイグレーション後、元に戻したい時のために実行する内容を設定する(ロールバック)
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
