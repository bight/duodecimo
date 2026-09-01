<?php

namespace App\Models;

use App\Enums\ContentType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Content extends Model
{
    use HasFactory, HasSlug;

    public $guarded = [];

    public $fillable = [
        'title',
        'slug',
    ];

    protected function casts(): array
    {
        return [
            'content_type' => ContentType::class,
        ];
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function book(): BelongsTo
    {
        return $this->BelongsTo(Book::class);
    }
}
