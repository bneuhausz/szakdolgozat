<?php

use Illuminate\Database\Seeder;

class MuscleGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $muscleGroup = new \App\MuscleGroup();
        $muscleGroup->name_en = "Back";
        $muscleGroup->name_hu = "Hát";
        $muscleGroup->save();

        $muscleGroup = new \App\MuscleGroup();
        $muscleGroup->name_en = "Biceps";
        $muscleGroup->name_hu = "Bicepsz";
        $muscleGroup->save();

        $muscleGroup = new \App\MuscleGroup();
        $muscleGroup->name_en = "Cardiovascular System";
        $muscleGroup->name_hu = "Karddiovaszkuláris Rendszer";
        $muscleGroup->save();
    }
}
