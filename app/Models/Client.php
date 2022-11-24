<?php

namespace App\Models;

use App\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    public function slots(){
        return $this->hasMany(FreelancerSlot::class);
    }

    public function user(){
        return $this->hasOne(User::class);
    }
}