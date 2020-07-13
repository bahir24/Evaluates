<?php

use Illuminate\Database\Seeder;

class ScienseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sciences = ['Русский язык', 'Математика', 'Физика', 'Английский язык', 'Немецкий язык', 'Биология', 'Химия', 'Геометрия'];
        foreach($sciences as $science){
            DB::table('sciences')->insert([
                'science' => $science
            ]);
        }
    }
}
