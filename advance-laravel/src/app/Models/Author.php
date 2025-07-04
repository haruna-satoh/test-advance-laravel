<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // $fillable'name','age','nationality'を書き換え可能にする
    protected $fillable = ['name','age', 'nationality'];
}
