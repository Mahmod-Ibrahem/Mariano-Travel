<?php

namespace Modules\Review\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Tour\Entities\Tour;
use Spatie\Translatable\HasTranslations;

class Review extends Model
{
    use HasFactory, HasTranslations;
    protected $fillable = ['tour_id', 'title', 'content', 'reviewer'];
    public $translatable = ['title', 'content', 'reviewer'];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }

    protected static function newFactory()
    {
        return \Modules\Review\Database\factories\ReviewFactory::new();
    }
}
