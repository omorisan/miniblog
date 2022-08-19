<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    public function user()
    {
        //return $this->belongsTo(User::class);
        return $this->belongsTo('App\Models\User');
    }

    public function bookmark()
    {
        return $this->hasMany(Bookmark::class);
    }
}
