<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'number', 'portfolio', 'offer', 'find', 'link', 'category_id', 'position', 'text', 'active'
    ];
}
