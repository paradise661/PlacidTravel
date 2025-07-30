<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'image', 'order', 'image', 'banner_image', 'description', 'short_description', 'other_description', 'seo_title', 'seo_description', 'seo_keywords', 'seo_schema', 'status'];
}
