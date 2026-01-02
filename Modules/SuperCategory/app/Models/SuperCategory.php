<?php

namespace Modules\SuperCategory\App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Category\Entities\Category;

// use Modules\SuperCategory\Database\Factories\SuperCategoryFactory;

class SuperCategory extends Model
{
    use HasFactory, Sluggable;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'name',
        'slug'
    ];

    public function categories()
    {
        return $this->hasMany(Category::class);
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

    // protected static function newFactory(): SuperCategoryFactory
    // {
    //     return SuperCategoryFactory::new();
    // }
}
