<?php

namespace App\Models;

use App\Enums\ContentType;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Content extends Model
{
    use HasFactory;

    public $guarded = [];

    protected function casts(): array
    {
        return [
            'content_type' => ContentType::class,
        ];
    }

    public function book(): Book
    {
        return $this->BelongsTo(Book::class);
    }
}
