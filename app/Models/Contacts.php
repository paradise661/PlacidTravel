<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'course', 'message', 'number', 'url', 'address', 'date', 'country'];
}
