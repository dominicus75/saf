<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('users')->count() == 0){

            DB::table('users')->insert([

                [
                    'name' => 'John Admission',
                    'email' => 'john.admission@saf.com',
                    'password' => Hash::make('P@$$w0rd'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Martha Assistant',
                    'email' => 'martha.assistant@saf.com',
                    'password' => Hash::make('P@$$w0rd'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]

            ]);

        }

    }

}
