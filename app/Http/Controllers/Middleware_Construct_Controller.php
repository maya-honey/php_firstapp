<?php

namespace App\Http\Controllers;

class Middleware_Construct_Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('EnsureTokenIsValid');
    }
    
    public function Middleware_con(){
        return "controller_middleware_constructor";
    }
}
