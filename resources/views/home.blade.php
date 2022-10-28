<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>Home</h1>
        <h2>ルーティング</h2>
        <ul>
            <li><a href="/view">View</a></li>
            <li><a href="/redirect">Redirect</a></li>
            <li><a href="/user/<?php echo "1" ?>">Catch Param | Userid</a></li>
            <li><a href="/number/1">Catch Param | Number</a></li>
            <li><a href="/namae">Name Route</a></li>
            <li><a href="/namae_2/7">Name Route 2</a></li>
            <li><a href="/middleware">Middleware Route</a></li>
            <li><a href="/middoleware/one">Middleware Group1</a></li>
            <li><a href="/middoleware/two">Middleware Group2</a></li>
            <li><a href="/orders/1">Controller Route</a></li>
            <li><a href="/subdomain">Subdomain Route</a></li>
            <li><a href="/prefix/users">Route Prefix</a></li>
        </ul>
        <h2>コントローラ</h2>
        <ul>
            <li><a href="/con_controller/1">基本のコントローラ</a></li>
            <li><a href="/invoke">シングルアクションコントローラ（__invoke）</a></li>
            <li><a href="/controller_middleware_route">コントローラミドルウェア（ルートに指定）</a></li>
            <li><a href="/controller_middleware_constructor">コントローラミドルウェア（コンストラクターに指定）</a></li>
            <li><a href="/resource_controller">リソースコントローラ</a></li>
        </ul>
        <h2>ビュー</h2>
            <ul>
                <li><a href="/testcomposer">ビューコンポーサー</a></li>
            </ul>
        </body>
</html>
