<?php
namespace App\Http\Controllers;

class OrderController extends Controller
{
    public function show($id)
    {
        return "<p>ユーザーIDは${id}です</p>";
    }
}