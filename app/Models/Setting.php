<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this -> belongsTo(User::class);
    }
    
    public function talks()
    {
        return $this->hasMany(Talk::class);
    }
    
    public function summaries()
    {
        return $this->hasMany(Summary::class);
    }
    
    protected $fillable = [
    'selfname',
    'selfimage_url',
    'partnername',
    'partnerimage_url',
    'user_id',
    ];
}
