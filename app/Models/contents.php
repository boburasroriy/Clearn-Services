<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contents extends Model
{
    use HasFactory;

    protected $fillable = [
          'title',
            'short_content',
            'content',
        ];
    public static function create(array $array)
    {
    }
}
