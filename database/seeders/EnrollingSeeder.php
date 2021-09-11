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
                    'id'         => 1,
                    'student_id' => 124,
                    'stgroup_id' => 10

                ],
                [
                    'id'         => 2,
                    'student_id' => 103,
                    'stgroup_id' => 17

                ],
                [
                    'id'         => 3,
                    'student_id' => 117,
                    'stgroup_id' => 9

                ],
                [
                    'id'         => 4,
                    'student_id' => 186,
                    'stgroup_id' => 7

                ],
                [
                    'id'         => 5,
                    'student_id' => 124,
                    'stgroup_id' => 20

                ],
                [
                    'id'         => 6,
                    'student_id' => 195,
                    'stgroup_id' => 9

                ],
                [
                    'id'         => 7,
                    'student_id' => 125,
                    'stgroup_id' => 4

                ],
                [
                    'id'         => 8,
                    'student_id' => 115,
                    'stgroup_id' => 11

                ],
                [
                    'id'         => 9,
                    'student_id' => 135,
                    'stgroup_id' => 10

                ],
                [
                    'id'         => 10,
                    'student_id' => 36,
                    'stgroup_id' => 18

                ],
                [
                    'id'         => 11,
                    'student_id' => 139,
                    'stgroup_id' => 14

                ],
                [
                    'id'         => 12,
                    'student_id' => 96,
                    'stgroup_id' => 9

                ],
                [
                    'id'         => 13,
                    'student_id' => 165,
                    'stgroup_id' => 6

                ],
                [
                    'id'         => 14,
                    'student_id' => 1,
                    'stgroup_id' => 18

                ],
                [
                    'id'         => 15,
                    'student_id' => 89,
                    'stgroup_id' => 16

                ],
                [
                    'id'         => 16,
                    'student_id' => 114,
                    'stgroup_id' => 15

                ],
                [
                    'id'         => 17,
                    'student_id' => 60,
                    'stgroup_id' => 9

                ],
                [
                    'id'         => 18,
                    'student_id' => 95,
                    'stgroup_id' => 19

                ],
                [
                    'id'         => 19,
                    'student_id' => 190,
                    'stgroup_id' => 19

                ],
                [
                    'id'         => 20,
                    'student_id' => 151,
                    'stgroup_id' => 16

                ],
                [
                    'id'         => 21,
                    'student_id' => 14,
                    'stgroup_id' => 8

                ],
                [
                    'id'         => 22,
                    'student_id' => 75,
                    'stgroup_id' => 11

                ],
                [
                    'id'         => 23,
                    'student_id' => 53,
                    'stgroup_id' => 6

                ],
                [
                    'id'         => 24,
                    'student_id' => 128,
                    'stgroup_id' => 12

                ],
                [
                    'id'         => 25,
                    'student_id' => 165,
                    'stgroup_id' => 12

                ],
                [
                    'id'         => 26,
                    'student_id' => 39,
                    'stgroup_id' => 8

                ],
                [
                    'id'         => 27,
                    'student_id' => 68,
                    'stgroup_id' => 7

                ],
                [
                    'id'         => 28,
                    'student_id' => 96,
                    'stgroup_id' => 6

                ],
                [
                    'id'         => 29,
                    'student_id' => 46,
                    'stgroup_id' => 13

                ],
                [
                    'id'         => 30,
                    'student_id' => 20,
                    'stgroup_id' => 18

                ],
                [
                    'id'         => 31,
                    'student_id' => 170,
                    'stgroup_id' => 1

                ],
                [
                    'id'         => 32,
                    'student_id' => 135,
                    'stgroup_id' => 15

                ],
                [
                    'id'         => 33,
                    'student_id' => 186,
                    'stgroup_id' => 14

                ],
                [
                    'id'         => 34,
                    'student_id' => 142,
                    'stgroup_id' => 6

                ],
                [
                    'id'         => 35,
                    'student_id' => 1,
                    'stgroup_id' => 6

                ],
                [
                    'id'         => 36,
                    'student_id' => 126,
                    'stgroup_id' => 5

                ],
                [
                    'id'         => 37,
                    'student_id' => 47,
                    'stgroup_id' => 17

                ],
                [
                    'id'         => 38,
                    'student_id' => 102,
                    'stgroup_id' => 17

                ],
                [
                    'id'         => 39,
                    'student_id' => 98,
                    'stgroup_id' => 2

                ],
                [
                    'id'         => 40,
                    'student_id' => 163,
                    'stgroup_id' => 18

                ],
                [
                    'id'         => 41,
                    'student_id' => 184,
                    'stgroup_id' => 18

                ],
                [
                    'id'         => 42,
                    'student_id' => 58,
                    'stgroup_id' => 4

                ],
                [
                    'id'         => 43,
                    'student_id' => 185,
                    'stgroup_id' => 2

                ],
                [
                    'id'         => 44,
                    'student_id' => 199,
                    'stgroup_id' => 10

                ],
                [
                    'id'         => 45,
                    'student_id' => 22,
                    'stgroup_id' => 3

                ],
                [
                    'id'         => 46,
                    'student_id' => 82,
                    'stgroup_id' => 10

                ],
                [
                    'id'         => 47,
                    'student_id' => 29,
                    'stgroup_id' => 10

                ],
                [
                    'id'         => 48,
                    'student_id' => 55,
                    'stgroup_id' => 4

                ],
                [
                    'id'         => 49,
                    'student_id' => 156,
                    'stgroup_id' => 3

                ],
                [
                    'id'         => 50,
                    'student_id' => 134,
                    'stgroup_id' => 3

                ],
                [
                    'id'         => 51,
                    'student_id' => 20,
                    'stgroup_id' => 15

                ],
                [
                    'id'         => 52,
                    'student_id' => 92,
                    'stgroup_id' => 18

                ],
                [
                    'id'         => 53,
                    'student_id' => 21,
                    'stgroup_id' => 18

                ],
                [
                    'id'         => 54,
                    'student_id' => 134,
                    'stgroup_id' => 13

                ],
                [
                    'id'         => 55,
                    'student_id' => 135,
                    'stgroup_id' => 17

                ],
                [
                    'id'         => 56,
                    'student_id' => 188,
                    'stgroup_id' => 11

                ],
                [
                    'id'         => 57,
                    'student_id' => 161,
                    'stgroup_id' => 12

                ],
                [
                    'id'         => 58,
                    'student_id' => 106,
                    'stgroup_id' => 1

                ],
                [
                    'id'         => 59,
                    'student_id' => 48,
                    'stgroup_id' => 9

                ],
                [
                    'id'         => 60,
                    'student_id' => 155,
                    'stgroup_id' => 3

                ],
                [
                    'id'         => 61,
                    'student_id' => 57,
                    'stgroup_id' => 18

                ],
                [
                    'id'         => 62,
                    'student_id' => 101,
                    'stgroup_id' => 16

                ],
                [
                    'id'         => 63,
                    'student_id' => 176,
                    'stgroup_id' => 9

                ],
                [
                    'id'         => 64,
                    'student_id' => 66,
                    'stgroup_id' => 3

                ],
                [
                    'id'         => 65,
                    'student_id' => 138,
                    'stgroup_id' => 16

                ],
                [
                    'id'         => 66,
                    'student_id' => 141,
                    'stgroup_id' => 15

                ],
                [
                    'id'         => 67,
                    'student_id' => 167,
                    'stgroup_id' => 3

                ],
                [
                    'id'         => 68,
                    'student_id' => 101,
                    'stgroup_id' => 4

                ],
                [
                    'id'         => 69,
                    'student_id' => 198,
                    'stgroup_id' => 9

                ],
                [
                    'id'         => 70,
                    'student_id' => 124,
                    'stgroup_id' => 5

                ],
                [
                    'id'         => 71,
                    'student_id' => 162,
                    'stgroup_id' => 20

                ],
                [
                    'id'         => 72,
                    'student_id' => 157,
                    'stgroup_id' => 17

                ],
                [
                    'id'         => 73,
                    'student_id' => 38,
                    'stgroup_id' => 18

                ],
                [
                    'id'         => 74,
                    'student_id' => 133,
                    'stgroup_id' => 3

                ],
                [
                    'id'         => 75,
                    'student_id' => 196,
                    'stgroup_id' => 17

                ],
                [
                    'id'         => 76,
                    'student_id' => 183,
                    'stgroup_id' => 18

                ],
                [
                    'id'         => 77,
                    'student_id' => 19,
                    'stgroup_id' => 19

                ],
                [
                    'id'         => 78,
                    'student_id' => 12,
                    'stgroup_id' => 14

                ],
                [
                    'id'         => 79,
                    'student_id' => 44,
                    'stgroup_id' => 12

                ],
                [
                    'id'         => 80,
                    'student_id' => 30,
                    'stgroup_id' => 20

                ],
                [
                    'id'         => 81,
                    'student_id' => 92,
                    'stgroup_id' => 4

                ],
                [
                    'id'         => 82,
                    'student_id' => 90,
                    'stgroup_id' => 12

                ],
                [
                    'id'         => 83,
                    'student_id' => 104,
                    'stgroup_id' => 7

                ],
                [
                    'id'         => 84,
                    'student_id' => 164,
                    'stgroup_id' => 16

                ],
                [
                    'id'         => 85,
                    'student_id' => 169,
                    'stgroup_id' => 6

                ],
                [
                    'id'         => 86,
                    'student_id' => 130,
                    'stgroup_id' => 7

                ],
                [
                    'id'         => 87,
                    'student_id' => 143,
                    'stgroup_id' => 14

                ],
                [
                    'id'         => 88,
                    'student_id' => 129,
                    'stgroup_id' => 19

                ],
                [
                    'id'         => 89,
                    'student_id' => 96,
                    'stgroup_id' => 6

                ],
                [
                    'id'         => 90,
                    'student_id' => 58,
                    'stgroup_id' => 13

                ],
                [
                    'id'         => 91,
                    'student_id' => 128,
                    'stgroup_id' => 15

                ],
                [
                    'id'         => 92,
                    'student_id' => 16,
                    'stgroup_id' => 17

                ],
                [
                    'id'         => 93,
                    'student_id' => 124,
                    'stgroup_id' => 17

                ],
                [
                    'id'         => 94,
                    'student_id' => 80,
                    'stgroup_id' => 13

                ],
                [
                    'id'         => 95,
                    'student_id' => 15,
                    'stgroup_id' => 3

                ],
                [
                    'id'         => 96,
                    'student_id' => 94,
                    'stgroup_id' => 6

                ],
                [
                    'id'         => 97,
                    'student_id' => 81,
                    'stgroup_id' => 2

                ],
                [
                    'id'         => 98,
                    'student_id' => 56,
                    'stgroup_id' => 10

                ],
                [
                    'id'         => 99,
                    'student_id' => 177,
                    'stgroup_id' => 7

                ],
                [
                    'id'         => 100,
                    'student_id' => 2,
                    'stgroup_id' => 5
                ]

            ]);

        }

    }
}
