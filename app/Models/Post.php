<?php

namespace App\Models;

use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rubrique()
    {
        return $this->belongsTo(rubrique::class);
    }
}
