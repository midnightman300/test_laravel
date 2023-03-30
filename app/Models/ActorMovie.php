<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActorMovie extends Model
{
    use HasFactory;

    protected $table = 'actor_movie';
    protected $primaryKey = 'actor_movie_id';
}
