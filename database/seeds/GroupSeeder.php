<?php

use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [['ИБ-84', 'ИБ-85', 'ИБ-86'], ['ИБ-83', 'ИБ-82', 'ИБ-81'], ['ИБ-87', 'ИБ-88', 'ИБ-89']];
        foreach($courses as $courseNum => $course){
            foreach($course as $group){
            DB::table('groups')->insert([
                'group' => $group,
                'course' => $courseNum + 1
            ]);
        }
    }
    }
}
