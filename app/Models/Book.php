<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    public $guarded = [];

    public $fillable = [
        'title',
    ];

    public function contents(): HasMany
    {
        return $this->hasMany(Content::class);
    }
}
