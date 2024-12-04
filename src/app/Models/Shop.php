<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'area_id',
        'genre_id',
        'description',
        'image_url'
    ];

    public function area()
    {
        return $this->belongsTo(Area::class); // ショップは一つのエリアに属する
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class); // ショップは一つのジャンルに属する
    }
    // public function likedByUsers()
    public function likes()
    {
        return $this->belongsToMany(User::class, 'likes');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }


}
