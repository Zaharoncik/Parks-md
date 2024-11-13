<?php

namespace App\Services;

use App\Models\Activity;

class ActivitiesService extends BaseServices {
    public function __construct(Activity $model)
    {
        $this->model = $model;
    }
}