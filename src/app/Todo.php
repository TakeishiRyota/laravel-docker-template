<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//todoクラスをモデルとして継承
class Todo extends Model
{
    //操作対象テーブルの指定
    protected $table = 'todos';

    //->fill()で格納する内容
    protected $fillable = [
        'content' // 入力内容カラム,
    ];
}
