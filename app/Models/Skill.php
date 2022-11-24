<?php

namespace App\Models;

use App\Models\Freelancer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    public function freelancers(){
        return $this->belongsToMany(Freelancer::class, 'freelancer_skills', 'skill_id', 'freelancer_id');
    }
}
