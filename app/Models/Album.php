<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps=false;

    public function tracks() {
        return $this->hasMany(Music::class);
    }
}
