<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function shops()
    {
        return $this->hasMany(Shop::class); // 一つのエリアに対して多くのショップ
    }
}
