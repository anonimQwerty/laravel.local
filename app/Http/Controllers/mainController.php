<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class mainController extends Controller
{
    function index(){
        $active=collect(['current-menu-item', '', '', '', '']);
        return view('index', ['activemain'=>$active]);

    }
}
