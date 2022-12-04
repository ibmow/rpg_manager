<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected $fillable = [
        'name',
        'description',
        'specialite',
        'magie',
        'force',
        'agilite',
        'intelligence',
        'point_de_vie'
    ];

    public function posts()
{
    return $this->hasMany(Post::class);
}
}
