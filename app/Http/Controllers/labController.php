<?php

namespace App\Http\Controllers;

use App\Lab\Callback\testCallback;
use App\Lab\Links\linksTest;
use Illuminate\Http\Request;

class labController extends Controller
{
    public function links()
    {
        $l=new linksTest();
        $l->run();
    }
    public function callbackTst()
    {
        $l=new testCallback();
        $l->go();
    }

    public function vue()
    {
        return view('vue');
    }
}
