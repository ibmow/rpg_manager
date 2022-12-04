<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function user()
{
    return $this->belongsTo(User::class);
}

public function personnage()
{
    return $this->belongsTo(Personnage::class);
}

public function groupe()
{
    return $this->belongsTo(Groupe::class);
}



}
