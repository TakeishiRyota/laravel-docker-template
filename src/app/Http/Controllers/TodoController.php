<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Todo;

class TodoController extends Controller
{
    //一覧表示処理
    public function index()
    {
        $todo = new Todo();
        //全件取得内容を代入
        $todos = $todo->all();

        //一覧画面を取得結果とともに返却
        return view('todo.index', ['todos' => $todos]);
    }

    //新規作成画面表示
    public function create()
    {
        //新規作成を返却
        return view('todo.create');
    }

    //新規追加処理
    public function store(Request $request) 
    {
        //リクエストに含まれるフォームの入力内容を代入
        $inputs = $request->all();
        dd($inputs); 

        // 1. todosテーブルの1レコードを表すTodoクラスをインスタンス化
        $todo = new Todo(); 
        // 2. Todoインスタンスのすべての要素にフォームの内容を格納
        $todo->fill($inputs);
        // 3. Todoインスタンスの`->save()`を実行してオブジェクトの状態をDBに保存するINSERT文を実行
        $todo->save();

        //一覧画面にリダイレクト
        return redirect()->route('todo.index'); 

    }


}