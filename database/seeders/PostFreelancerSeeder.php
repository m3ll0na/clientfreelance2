<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Database\Seeders\PostFreelancerSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostFreelancerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'name'=>'James',
                'description' => '5 years experience in video editing',
                'address'=> 'Kota Kinabalu',
                'email'=> 'james@gmail.com',
                'phoneNumber' => '01234566677',
                'accountNumber'=>'23456789122',
                'accountBank'=>'Cimb',
            ],
            [
                'name'=>'John',
                'description' => '2 years experience in corporate logo design',
                'address'=> 'Kota Kinabalu',
                'email'=> 'john@gmail.com',
                'phoneNumber' => '01634566688',
                'accountNumber'=>'83456789133',
                'accountBank'=>'Cimb',
            ]
        ];
        foreach ($posts as $key => $value){
            Post::create($value);
        }

    }
}
