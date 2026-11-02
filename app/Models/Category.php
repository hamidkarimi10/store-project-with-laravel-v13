<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\Attributes\Sluggable;

#[Sluggable(from: 'name', to: 'slug')]
class Category extends Model
{
    protected $guarded = ['id'];

    /** @use HasFactory<CategoryFactory> */
    use HasFactory;

    use SoftDeletes;
}
