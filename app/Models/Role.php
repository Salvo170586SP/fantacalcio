<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'role'
    ];


      /**
     * Get the players for the team.
     * ******************************
     * Prendo i players(giocatori) da role(ruoli)
     */
    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
