<?php

namespace App\Services;

use App\Models\ParkActivity;

class ParkActivitiesService extends BaseServices {
    public function __construct(ParkActivity $model)
    {
        $this->model = $model;
    }
}