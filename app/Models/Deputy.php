<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deputy extends Model
{
    use HasFactory;

    public function political_party()
    {
        return $this->belongsTo(PoliticalParty::class);
    }
}