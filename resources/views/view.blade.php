<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Redirect</title>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <h1>View</h1>
        <?php
        foreach($users as $name => $age){
            echo "<li>${name} : ${age}</li>";
        }
        ?>
    </body>
</html>
