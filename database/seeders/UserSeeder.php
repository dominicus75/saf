<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

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
                    'id'         => 1,
                    'name'       => 'John Admission',
                    'email'      => 'john.admission@new-western.edu',
                    'password'   => Hash::make('P@$$w0rd'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id'         => 2,
                    'name'       => 'Martha Assistant',
                    'email'      => 'martha.assistant@new-western.edu',
                    'password'   => Hash::make('P@$$w0rd'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]

            ]);

        }

    }

}
