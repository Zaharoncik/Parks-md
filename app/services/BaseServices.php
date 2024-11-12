<?php

namespace App\Services;

class BaseServices {
    protected $model;

    public function create($data){
        return $this->model->create($data);
    }

    public function read(){
        $itmes = $this->model::all();
        return $itmes;
    }

    public function get($id, $slug){
        if ($slug){
            $item = $this->model::where('slug', $slug)->firstorFail();
        } else{
            $item = $this->model::findOrFail($id);
        }

        return $item;
    }

    public function update($id, $data){
        $item = $this->model->findOrFail($id);

        $item->update($data);
    }

    public function delete($id){
        $item = $this->model->findOrFail($id);

        $item->delete();
    }
}