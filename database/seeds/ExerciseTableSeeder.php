<?php

use Illuminate\Database\Seeder;

class ExerciseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exercise = new \App\Exercise();
        $exercise->name_en = "Deadlift";
        $exercise->name_hu = "Felhúzás";
        $exercise->description_en = "asdasdsad";
        $exercise->description_hu = "asdasdasdasdasdas";
        $exercise->musclegroup_id = "1";
        $exercise->exercisetype_id = "1";
        $exercise->video = "https://www.youtube.com/watch?v=4AObAU-EcYE&t=15s";
        $exercise->save();

        $exercise = new \App\Exercise();
        $exercise->name_en = "EZ-Bar Curl";
        $exercise->name_hu = "Bicepsz Francia Rúddal";
        $exercise->description_en = "asdasdsad";
        $exercise->description_hu = "asdasdasdasdasdas";
        $exercise->musclegroup_id = "2";
        $exercise->exercisetype_id = "2";
        $exercise->video = "https://www.youtube.com/watch?v=zG2xJ0Q5QtI";
        $exercise->save();

        $exercise = new \App\Exercise();
        $exercise->name_en = "Running";
        $exercise->name_hu = "Futás";
        $exercise->description_en = "asdasdsad";
        $exercise->description_hu = "asdasdasdasdasdas";
        $exercise->musclegroup_id = "3";
        $exercise->exercisetype_id = "3";
        $exercise->video = "link";
        $exercise->save();
    }

}
