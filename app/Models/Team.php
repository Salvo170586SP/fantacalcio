<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
        'city',
        'logo',
        'championship',
        'ceo',
    ];
    
    use HasFactory;



     /**
     * Get the players for the team.
     * ******************************
     * Prendo i players(giocatori) dal team(squadra)
     */
    public function players()
    {
        return $this->hasMany(Player::class);
    }
}
