<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abroad extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'status', 'order','image','banner_image','description','other_description','short_description','seo_title','seo_description','seo_keywords','seo_schema'];

}