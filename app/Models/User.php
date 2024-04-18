<?php

// app/Models/User.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'phonenumber',
        'password',
        'bio',
        'type',
        'username',
        'city',
        'country',
        'profile_picture',
        'independent_artist',
        'gallery_representative',
        'sell_original_artworks',
        'sell_digital_creations',
        'artistic_aspirations',
        'artist_quote',
        'portfolio',
        'socialmedia',
        'art_samples',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'art_samples' => 'json',
    ];

    protected function type(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["User", "admin", "Artist"][$value],
        );
    }
    public function artworks()
    {
        return $this->hasMany(Artwork::class);
    }
    public function tutorials()
{
    return $this->hasMany(Tutorial::class);
}
public function blogs()
{
    return $this->hasMany(Blog::class);
}
public function likedArtworks()
{
    return $this->belongsToMany(Artwork::class, 'likes');
}
public function comments()
{
    return $this->hasMany(Comment::class);
}
public function Tip()
{
    return $this->hasMany(Artwork::class);
}
public function userArtworks()
    {
        return $this->hasMany(Artwork::class);
    }
    public function sentMoneyRequests()
    {
        return $this->hasMany(Transaction::class, 'sender_id');
    }

    public function receivedMoneyRequests()
    {
        return $this->hasMany(Transaction::class, 'recipient_id');
    }

}

