<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // $fillable'name','age','nationality'を書き換え可能にする
    protected $fillable = ['name','age', 'nationality'];

    // getDetailアクションを定義
    public function getDetail()
    {
        // $txtの表示の仕方を指定
        $txt = 'ID:'.$this->id . '' . $this->name . '(' . $this->age . '才' . ')' . $this->nationality;
        return $txt;
    }
    // public function book()
    public function books()
    {
        // 1対1の関係の時のリレーション
        // return $this->hasOne('App\Models\Book');
        // 1対多の関係の時のリレーション
        return $this->hasMany('App\Models\Book');
    }
    public function reviews()
    {
        return $this->belongsToMany(Review::class)->withPivot('review');
    }
}
