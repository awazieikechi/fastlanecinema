<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Lateef Wole',
                'email' => 'testme@yahoo.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3mpzd.wlKy518o6gnKRA3OpATkTxexwcUJSZrisa8a5TQWKMajA3u',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'created_at' => '2022-05-30 15:13:27',
                'updated_at' => '2022-05-30 15:13:27',
            ),
        ));
        
        
    }
}