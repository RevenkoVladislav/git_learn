<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function second()
    {
        echo 'second';
    }
    public function first()
    {
        echo 'first';
    }
}
