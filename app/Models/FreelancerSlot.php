<?php

namespace App\Models;

use App\Models\Freelancer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FreelancerSlot extends Model
{
    use HasFactory;

    public function freelancer(){
        return $this->hasOne(Freelancer::class);
    }

    public function client(){
        return $this->hasOne(Client::class);
    }
}
