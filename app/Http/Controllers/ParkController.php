<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParkController extends Controller
{
    private $service;

    public function __construct()
    {
        $this->sevice = new ParkServices();
    }

}
