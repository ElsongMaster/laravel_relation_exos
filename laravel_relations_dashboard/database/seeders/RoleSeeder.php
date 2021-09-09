<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

use App\Models\User;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {  
        $faker = Faker::create();
        
        DB::table('roles')->insert([
        
        ['nom'=>'admin',
        //  'user_id'=>$faker->numberBetween(1,count(User::all()))
    
        ],
        ['nom'=>'visiteur',
        //  'user_id'=>$faker->numberBetween(1,count(User::all()))
        
        ],
        ['nom'=>'editeur',
        
        ]
    ]);
    }
}
