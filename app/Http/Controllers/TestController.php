<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test;

use Illuminate\Support\Facades\DB;//ファサードの使用を定義 クエリビルダ


class TestController extends Controller
{

    public function index()
    {
        $values = Test::all();//コレクション

        $tests = DB::table('tests')->get();//クエリビルダ

        dd($tests);//データの取得はコレクション型,クエリビルダなど。

        return view('tests.test', compact('values'));//$valuesの取得データをcompact関数でviewsに渡す
    }
}
