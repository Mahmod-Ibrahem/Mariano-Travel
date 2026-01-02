<?php

namespace Modules\Category\Entities;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Tour\Entities\Tour;

use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, HasTranslations, Sluggable;

    protected $fillable = ['country_id', 'type', 'image', 'slug', 'name', 'header', 'bg_header', 'description', 'title_meta', 'description_meta'];
    public $translatable = ['slug', 'name', 'header', 'bg_header', 'description', 'title_meta', 'description_meta'];

    public function tours()
    {
        return $this->hasMany(Tour::class);
    }

    public function country()
    {
        return $this->belongsTo(\Modules\Country\Entities\Country::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => true,
            ]
        ];
    }
}
