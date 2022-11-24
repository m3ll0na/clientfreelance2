<?php

namespace App\Models;

use App\Models\Freelancer;
use App\Models\FreelancerSlot;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Freelancer extends Model
{
    use HasFactory;

    public function skills(){
        return $this->belongsToMany(Skill::class, 'freelancer_skills', 'freelancer_id', 'skill_id')->withPivot("description","rate");
    }

    public function slots(){
        return $this->hasMany(FreelancerSlot::class);
    }

    public function user(){
        return $this->hasOne(User::class);
    }
}

// Query freelancer by skills
// $freelancer = Freelancer::whereHas('skills', function ($query) {
//     $query->where('skills.description', 'like', '%Iskandar%')
//     ->orWhere('freelancers.address','like', '%Iskandar%')
//     ->orWhere('freelancers.name', 'like','%Iskandar%');
// })->get();
