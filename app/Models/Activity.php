<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable =[
        'name'
    ];

    public function parkActivities(){
        return $this->hasMany(ParkActivity::class);
    }

    protected static function booted(){
        static::creating(function ($activity){
            $activity->slug = $activity->generateUniqueSlug($activity->name);
        });
    }

    private function generateUniqueSlug($name){
        $slug = Str::slug($name);
        
        $count = Activity::where('slug', 'like', $slug.'%')->count();//ищю в табл если есть слаг с таким именем и возвращяю сколько его там

        if($count){
            $slug = $slug . "-" . ($count + 1);
        }

        return $slug;
    }
}
