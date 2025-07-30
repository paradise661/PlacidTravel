<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'status', 'order', 'image', 'banner_image', 'description', 'short_description', 'seo_title', 'seo_description', 'seo_keywords'];
}
