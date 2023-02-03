<?php

namespace App\Http\Controllers;

use App\Lab\Links\linksTest;
use Illuminate\Http\Request;

class labController extends Controller
{
    public function links()
    {
        $l=new linksTest();
        $l->run();
    }
}
