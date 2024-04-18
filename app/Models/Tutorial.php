<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'video_path'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}