<?php

use Illuminate\Database\Seeder;

class ExerciseTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exerciseType = new \App\ExerciseType();
        $exerciseType->name_en = "Compound";
        $exerciseType->name_hu = "Összetett";
        $exerciseType->save();

        $exerciseType = new \App\ExerciseType();
        $exerciseType->name_en = "Isolation";
        $exerciseType->name_hu = "Izolált";
        $exerciseType->save();
    }
}
