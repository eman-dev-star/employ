<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'disc',
        'title',
        'body',
        'date_of_creation',
        'user_id',
        'photo',
    ];
}
