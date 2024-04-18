<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    protected $fillable = ['title', 'category', 'instructions', 'tools_used', 'pdf'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

