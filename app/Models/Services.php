<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    protected $fillable = ['name','order', 'status', 'slug', 'image','banner_image', 'description', 'short_description', 'seo_title', 'seo_description', 'seo_keywords', ];
}