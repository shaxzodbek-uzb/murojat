<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appeal extends Model
{
    use HasFactory;
    const STATUS_NEW = 1;
    const STATUS_ACCEPTED = 2;
    const STATUS_PROCESSING = 3;
    const STATUS_COMPLETED = 4;
    
    public function operator()
    {
        return $this->belongsTo(Operator::class);
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function deputy()
    {
        return $this->belongsTo(Deputy::class);
    }

    public function officer()
    {
        return $this->belongsTo(Officer::class);
    }

}