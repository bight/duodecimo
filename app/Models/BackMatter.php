<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Table('backmatter')]
class BackMatter extends Model
{
    use HasFactory;

    public $guarded = [];
}
