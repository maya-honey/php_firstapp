<?php

namespace App\Http\Controllers;

//基本のコントローラクラス
//App\Http\Controllers\Controllerクラスを拡張するのが基本
class Con_Controller extends Controller
{
    public function show($id)
    {
        return "あなたのIDは${id}です";
    }
}