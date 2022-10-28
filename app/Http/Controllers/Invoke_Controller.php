<?php

namespace App\Http\Controllers;


class Invoke_Controller extends Controller
{
    public function __invoke()
    {
        return "シングルアクションコントローラ";
    }
}
