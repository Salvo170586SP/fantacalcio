<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surname',
        'birthday',
        'role',
        'team',
        'country',
        'image',
        'path_image'
        
    ];


    
      /**
     * Get the players for the team.
     * ******************************
     * Prendo i players(giocatori) da role(ruoli)
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
