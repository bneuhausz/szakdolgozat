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
        $muscleGroup->name_en = "Chest";
        $muscleGroup->name_hu = "Mell";
        $muscleGroup->save();

        $muscleGroup = new \App\MuscleGroup();
        $muscleGroup->name_en = "Shoulders";
        $muscleGroup->name_hu = "Váll";
        $muscleGroup->save();

        $muscleGroup = new \App\MuscleGroup();
        $muscleGroup->name_en = "Legs";
        $muscleGroup->name_hu = "Láb";
        $muscleGroup->save();

        $muscleGroup = new \App\MuscleGroup();
        $muscleGroup->name_en = "Triceps";
        $muscleGroup->name_hu = "Tricepsz";
        $muscleGroup->save();

        $muscleGroup = new \App\MuscleGroup();
        $muscleGroup->name_en = "Abs";
        $muscleGroup->name_hu = "Has";
        $muscleGroup->save();

        $muscleGroup = new \App\MuscleGroup();
        $muscleGroup->name_en = "Forearm";
        $muscleGroup->name_hu = "Alkar";
        $muscleGroup->save();
    }
}
