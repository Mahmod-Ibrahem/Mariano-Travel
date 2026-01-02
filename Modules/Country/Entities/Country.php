<?php

namespace Modules\Country\Entities;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Tour\Entities\Tour;
use Spatie\Translatable\HasTranslations;

class Country extends Model
{
    use HasFactory, HasTranslations, Sluggable;

    protected $fillable = ['name', 'is_active', 'image', 'slug'];
    public $translatable = ['name', 'slug'];

    public function tours()
    {
        return $this->hasManyThrough(Tour::class, \Modules\Category\Entities\Category::class);
    }

    public function categories()
    {
        return $this->hasMany(\Modules\Category\Entities\Category::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
