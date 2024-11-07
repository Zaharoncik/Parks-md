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

    protected static function booted()
    {
        static::creating(function ($park) {
            $park->slug = $park->generateUniqueSlug($park->name); // Используйте объект $park, а не $this
        });
    }

    private function generateUniqueSlug($name)
    {
        $slug = Str::slug($name);
        
        // Проверяем, сколько таких слагов уже есть в базе
        $count = Park::where('slug', 'like', $slug.'%')->count();

        // Если такие слаги уже есть, добавляем уникальный суффикс
        if ($count) {
            $slug = $slug . "-" . ($count + 1);
        }

        return $slug; // Обязательно возвращаем новый слаг
    }

}