<?php

namespace App\Models;
use App\Models\article;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function articles () {
        return $this->belongsToMany(article::class);
    }


}
