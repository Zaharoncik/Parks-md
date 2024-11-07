<?php

namespace App\Services;

use App\Models\Park;

class ParkService extends BaseServices {
    public function __construct(Park $model)
    {
        $this->model = $model;
    }
}