<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnrollingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('enrollings')->count() == 0){

            DB::table('enrollings')->insert([

                [
                    'student_id'     => 124,
                    'study_group_id' => 10
                ],
                [
                    'student_id'     => 103,
                    'study_group_id' => 17
                ],
                [
                    'student_id'     => 117,
                    'study_group_id' => 9
                ],
                [
                    'student_id'     => 186,
                    'study_group_id' => 7
                ],
                [
                    'student_id'     => 124,
                    'study_group_id' => 20
                ],
                [
                    'student_id'     => 195,
                    'study_group_id' => 9
                ],
                [
                    'student_id'     => 125,
                    'study_group_id' => 4
                ],
                [
                    'student_id'     => 115,
                    'study_group_id' => 11
                ],
                [
                    'student_id'     => 135,
                    'study_group_id' => 10
                ],
                [
                    'student_id'     => 36,
                    'study_group_id' => 18
                ],
                [
                    'student_id'     => 139,
                    'study_group_id' => 14
                ],
                [
                    'student_id'     => 96,
                    'study_group_id' => 9
                ],
                [
                    'student_id'     => 165,
                    'study_group_id' => 6
                ],
                [
                    'student_id'     => 1,
                    'study_group_id' => 18
                ],
                [
                    'student_id'     => 89,
                    'study_group_id' => 16
                ],
                [
                    'student_id'     => 114,
                    'study_group_id' => 15
                ],
                [
                    'student_id'     => 60,
                    'study_group_id' => 9
                ],
                [
                    'student_id'     => 95,
                    'study_group_id' => 19
                ],
                [
                    'student_id'     => 190,
                    'study_group_id' => 19
                ],
                [
                    'student_id'     => 151,
                    'study_group_id' => 16
                ],
                [
                    'student_id'     => 14,
                    'study_group_id' => 8
                ],
                [
                    'student_id'     => 75,
                    'study_group_id' => 11
                ],
                [
                    'student_id'     => 53,
                    'study_group_id' => 6
                ],
                [
                    'student_id'     => 128,
                    'study_group_id' => 12
                ],
                [
                    'student_id'     => 165,
                    'study_group_id' => 12
                ],
                [
                    'student_id'     => 39,
                    'study_group_id' => 8
                ],
                [
                    'student_id'     => 68,
                    'study_group_id' => 7
                ],
                [
                    'student_id'     => 96,
                    'study_group_id' => 6
                ],
                [
                    'student_id'     => 46,
                    'study_group_id' => 13
                ],
                [
                    'student_id'     => 20,
                    'study_group_id' => 18
                ],
                [
                    'student_id'     => 170,
                    'study_group_id' => 1
                ],
                [
                    'student_id'     => 135,
                    'study_group_id' => 15
                ],
                [
                    'student_id'     => 186,
                    'study_group_id' => 14
                ],
                [
                    'student_id'     => 142,
                    'study_group_id' => 6
                ],
                [
                    'student_id'     => 1,
                    'study_group_id' => 6
                ],
                [
                    'student_id'     => 126,
                    'study_group_id' => 5
                ],
                [
                    'student_id'     => 47,
                    'study_group_id' => 17
                ],
                [
                    'student_id'     => 102,
                    'study_group_id' => 17
                ],
                [
                    'student_id'     => 98,
                    'study_group_id' => 2
                ],
                [
                    'student_id'     => 163,
                    'study_group_id' => 18
                ],
                [
                    'student_id'     => 184,
                    'study_group_id' => 18
                ],
                [
                    'student_id'     => 58,
                    'study_group_id' => 4
                ],
                [
                    'student_id'     => 185,
                    'study_group_id' => 2
                ],
                [
                    'student_id'     => 199,
                    'study_group_id' => 10
                ],
                [
                    'student_id'     => 22,
                    'study_group_id' => 3
                ],
                [
                    'student_id'     => 82,
                    'study_group_id' => 10
                ],
                [
                    'student_id'     => 29,
                    'study_group_id' => 10
                ],
                [
                    'student_id'     => 55,
                    'study_group_id' => 4
                ],
                [
                    'student_id'     => 156,
                    'study_group_id' => 3
                ],
                [
                    'student_id'     => 134,
                    'study_group_id' => 3
                ],
                [
                    'student_id'     => 20,
                    'study_group_id' => 15
                ],
                [
                    'student_id'     => 92,
                    'study_group_id' => 18
                ],
                [
                    'student_id'     => 21,
                    'study_group_id' => 18
                ],
                [
                    'student_id'     => 134,
                    'study_group_id' => 13
                ],
                [
                    'student_id'     => 135,
                    'study_group_id' => 17
                ],
                [
                    'student_id'     => 188,
                    'study_group_id' => 11
                ],
                [
                    'student_id'     => 161,
                    'study_group_id' => 12
                ],
                [
                    'student_id'     => 106,
                    'study_group_id' => 1
                ],
                [
                    'student_id'     => 48,
                    'study_group_id' => 9
                ],
                [
                    'student_id'     => 155,
                    'study_group_id' => 3
                ],
                [
                    'student_id'     => 57,
                    'study_group_id' => 18
                ],
                [
                    'student_id'     => 101,
                    'study_group_id' => 16
                ],
                [
                    'student_id'     => 176,
                    'study_group_id' => 9
                ],
                [
                    'student_id'     => 66,
                    'study_group_id' => 3
                ],
                [
                    'student_id'     => 138,
                    'study_group_id' => 16
                ],
                [
                    'student_id'     => 141,
                    'study_group_id' => 15
                ],
                [
                    'student_id'     => 167,
                    'study_group_id' => 3
                ],
                [
                    'student_id'     => 101,
                    'study_group_id' => 4
                ],
                [
                    'student_id'     => 198,
                    'study_group_id' => 9
                ],
                [
                    'student_id'     => 124,
                    'study_group_id' => 5
                ],
                [
                    'student_id'     => 162,
                    'study_group_id' => 20
                ],
                [
                    'student_id'     => 157,
                    'study_group_id' => 17
                ],
                [
                    'student_id'     => 38,
                    'study_group_id' => 18
                ],
                [
                    'student_id'     => 133,
                    'study_group_id' => 3
                ],
                [
                    'student_id'     => 196,
                    'study_group_id' => 17
                ],
                [
                    'student_id'     => 183,
                    'study_group_id' => 18
                ],
                [
                    'student_id'     => 19,
                    'study_group_id' => 19
                ],
                [
                    'student_id'     => 12,
                    'study_group_id' => 14
                ],
                [
                    'student_id'     => 44,
                    'study_group_id' => 12
                ],
                [
                    'student_id'     => 30,
                    'study_group_id' => 20
                ],
                [
                    'student_id'     => 92,
                    'study_group_id' => 4
                ],
                [
                    'student_id'     => 90,
                    'study_group_id' => 12
                ],
                [
                    'student_id'     => 104,
                    'study_group_id' => 7
                ],
                [
                    'student_id'     => 164,
                    'study_group_id' => 16
                ],
                [
                    'student_id'     => 169,
                    'study_group_id' => 6
                ],
                [
                    'student_id'     => 130,
                    'study_group_id' => 7
                ],
                [
                    'student_id'     => 143,
                    'study_group_id' => 14
                ],
                [
                    'student_id'     => 129,
                    'study_group_id' => 19
                ],
                [
                    'student_id'     => 96,
                    'study_group_id' => 7
                ],
                [
                    'student_id'     => 58,
                    'study_group_id' => 13
                ],
                [
                    'student_id'     => 128,
                    'study_group_id' => 15
                ],
                [
                    'student_id'     => 16,
                    'study_group_id' => 17
                ],
                [
                    'student_id'     => 124,
                    'study_group_id' => 17
                ],
                [
                    'student_id'     => 80,
                    'study_group_id' => 13
                ],
                [
                    'student_id'     => 15,
                    'study_group_id' => 3
                ],
                [
                    'student_id'     => 94,
                    'study_group_id' => 6
                ],
                [
                    'student_id'     => 81,
                    'study_group_id' => 2
                ],
                [
                    'student_id'     => 56,
                    'study_group_id' => 10
                ],
                [
                    'student_id'     => 177,
                    'study_group_id' => 7
                ],
                [
                    'student_id'     => 2,
                    'study_group_id' => 5
                ]

            ]);

        }

    }
}
