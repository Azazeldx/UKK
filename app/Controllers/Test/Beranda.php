<?php

namespace App\Controllers\Test;

use App\Controllers\BaseController;


class Beranda extends BaseController
{
    public function index()
    {
        return view('Test/index');
    }
}