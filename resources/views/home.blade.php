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
        <ul>
            <li><a href="/view">View</a></li>
            <li><a href="/redirect">Redirect</a></li>
            <li><a href="/user/<?php echo "1" ?>">Catch Param | Userid</a></li>
            <li><a href="/number/1">Catch Param | Number</a></li>
            <li><a href="/namae">Name Route</a></li>
            <li><a href="/namae_2/7">Name Route 2</a></li>
            <li><a href="/middleware">Middleware</a></li>
        </ul>
    </body>
</html>
