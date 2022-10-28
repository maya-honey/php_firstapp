<?php

namespace App\View\Composers;

use Illuminate\View\View;


//コンポーサーの処理を記述

class TestComposer{
    protected $users;

    public function __construct()
    {
        $this->users = "takeru hideo";
    }


    public function compose(View $view)
    {
        $view->with('username', $this->users);
    }
}