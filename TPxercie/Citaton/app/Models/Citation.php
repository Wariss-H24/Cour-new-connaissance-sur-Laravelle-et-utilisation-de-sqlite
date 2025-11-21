<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Citation extends Model
{
use HasFactory;

    protected $fillable = [
        'texte',
        'auteur',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
