<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StudyGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('studygroups')->count() == 0){

            DB::table('studygroups')->insert([

                [
                    'id'         => 1,
                    'name'       => 'Mathematics',
                    'leader'     => 'Lydia Aguilar',
                    'subject'    => 'the study of quantity, structure, space, and change',
                    'created_at' => '2018-12-23'
                ],
                [
                    'id'         => 2,
                    'name'       => 'Biology',
                    'leader'     => 'Tyler Schultz',
                    'subject'    => 'the science of life and living organisms',
                    'created_at' => '2019-11-30'
                ],
                [
                    'id'         => 3,
                    'name'       => 'Chemistry',
                    'leader'     => 'Amy Gilbert',
                    'subject'    => 'the science of the composition, structure, properties, and reactions of matter, especially of atomic and molecular systems',
                    'created_at' => '2019-06-16'
                ],
                [
                    'id'         => 4,
                    'name'       => 'Physics',
                    'leader'     => 'Katharine Schultz',
                    'subject'    => 'the science of matterand energy and interactions between the two',
                    'created_at' => '2018-10-14'
                ],
                [
                    'id'         => 5,
                    'name'       => 'Geography',
                    'leader'     => 'Joshua Marsh',
                    'subject'    => 'the studyof the earth and its features',
                    'created_at' => '2019-03-16'
                ],
                [
                    'id'         => 6,
                    'name'       => 'Geology',
                    'leader'     => 'Gertrude Simon',
                    'subject'    => 'the scientific study of the origin, history, and structure of the earth',
                    'created_at' => '2019-04-08'
                ],
                [
                    'id'         => 7,
                    'name'       => 'Volcanology',
                    'leader'     => 'Hettie Singleton',
                    'subject'    => 'the study of volcanoes and volcanic phenomena',
                    'created_at' => '2019-03-17'
                ],
                [
                    'id'         => 8,
                    'name'       => 'Mechanical Engineering',
                    'leader'     => 'Charlie Nelson',
                    'subject'    => 'applies the principles of physics and material science',
                    'created_at' => '2019-04-04'
                ],
                [
                    'id'         => 9,
                    'name'       => 'Psychology',
                    'leader'     => 'Kyle Estrada',
                    'subject'    => 'the study of the mental process and behavior',
                    'created_at' => '2018-11-03'
                ],
                [
                    'id'         => 10,
                    'name'       => 'Anthropology',
                    'created_at' => '2018-12-22',
                    'subject'    => 'the study of the origin, behavior, and the physical, social, and cultural development of humans',
                    'leader'     => 'Marion Johnston'
                ],
                [
                    'id'         => 11,
                    'name'       => 'Archaeology',
                    'leader'     => 'Vincent Baldwin',
                    'subject'    => 'the study of past human lives by examining remaining material evidence',
                    'created_at' => '2021-07-19'
                ],
                [
                    'id'         => 12,
                    'name'       => 'Linguistics',
                    'leader'     => 'Ruby Hanson',
                    'subject'    => 'the study of language and phonetics',
                    'created_at' => '2020-05-22'
                ],
                [
                    'id'         => 13,
                    'name'       => 'Astronomy',
                    'leader'     => 'Myrtle Phillips',
                    'subject'    => 'the study of outer space',
                    'created_at' => '2020-05-22'
                ],
                [
                    'id'         => 14,
                    'name'       => 'Mechanics',
                    'leader'     => 'Jesse Hines',
                    'subject'    => 'design, construction, and use of machinery or mechanical structures',
                    'created_at' => '2019-12-10'
                ],
                [
                    'id'         => 15,
                    'name'       => 'Robotics',
                    'leader'     => 'Marie Bass',
                    'subject'    => 'the science of technology inthe design, fabrication, and application of robots',
                    'created_at' => '2020-05-16'
                ],
                [
                    'id'         => 16,
                    'name'       => 'Hydrology',
                    'leader'     => 'Chris Chandler',
                    'subject'    => 'the study of the propertiesand effects of water on earth',
                    'created_at' => '2019-12-25'
                ],
                [
                    'id'         => 17,
                    'name'       => 'Meteorology',
                    'leader'     => 'Jon Clark',
                    'subject'    => 'the study of weather and atmospheric conditions',
                    'created_at' => '2020-05-14'
                ],
                [
                    'id'         => 18,
                    'name'       => 'Oceanography',
                    'leader'     => 'Allen Howell',
                    'subject'    => 'the exploration and study of the ocean',
                    'created_at' => '2020-09-28'
                ],
                [
                    'id'         => 19,
                    'name'       => 'Seismology',
                    'leader'     => 'Scott Arnold',
                    'subject'    => 'the study of earthquakes',
                    'created_at' => '2018-09-26'
                ],
                [
                    'id'         => 20,
                    'name'       => 'Paleontology',
                    'leader'     => 'Clifford Edwards',
                    'subject'    => 'the study of prehistoric life through fossils',
                    'created_at' => '2019-02-01'
                ]

            ]);

        }
    }
}
