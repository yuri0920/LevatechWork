<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Summary extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function setting()
    {
        return $this->belongsTo(Setting::class);
    }
    
    public function talk()
    {
        return $this->belongsTo(Talk::class);
    }
}
