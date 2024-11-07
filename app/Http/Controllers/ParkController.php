<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParkStoreRequest;
use App\Models\Activity;
use App\Services\ParkService;
use Illuminate\Http\Request;

class ParkController extends Controller
{
    private $service;

    public function __construct(ParkService $service)
    {
        $this->service = $service;
    }

    public function index(){
        $items = $this->service->read();
        
        return view('admin.park.index');
    }

    public function create(){
        $activities = Activity::orderBy('name', 'asc')->get();
        
        return view('admin.park.create', ['activities' => $activities]);
    }

    public function store(ParkStoreRequest $request){
        $data = $request->validate();

        $this->service->create($data);

        $item = $this->service->create($data);

        return response()->json($item);
    }
}
