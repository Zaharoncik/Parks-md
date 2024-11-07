<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Park extends Model
{
    protected  $fillable = [
        'name',
        'street',
        'country',
        'area',
        'opens_at',
        'closes_at',
        'google_maps_url',
        'slug',
    ];

    public function Images(){
        return $this->hasMany(ParkImage::class);
    }

    public function activities(){
        return $this->hasMany(ParkActivity::class);
    }

    protected static function booted(){
        static::creating(function ($park){
            $park->slug = $this->generateUniqueSlug($park->name);


        });
    }

    private function generateUniqueSlug($name){
        $slug = Str::slug($name);
        
        $count = Park::where('slug', 'like', $slug.'%')->count();//ищю в табл если есть слаг с таким именем и возвращяю сколько его там

        if($count){
            $slug = $slug . "-" . ($count + 1);
        }
    }

}