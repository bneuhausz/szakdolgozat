<?php

use Illuminate\Database\Seeder;

class WorkoutPlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $workoutPlan = new \App\WorkoutPlan();
        $workoutPlan->name = 'Starting Strength';
        $workoutPlan->num_of_days = 3;
        $workoutPlan->type = 'Strength';
        $workoutPlan->difficulty = 'Beginner';
        $workoutPlan->link = 'http://startingstrength.com/get-started/programs';
        $workoutPlan->save();

        $workoutPlan = new \App\WorkoutPlan();
        $workoutPlan->name = 'Strong Lifts 5x5';
        $workoutPlan->num_of_days = 3;
        $workoutPlan->type = 'Strength';
        $workoutPlan->difficulty = 'Beginner';
        $workoutPlan->link = 'https://stronglifts.com/5x5/';
        $workoutPlan->save();

        $workoutPlan = new \App\WorkoutPlan();
        $workoutPlan->name = '5-3-1';
        $workoutPlan->num_of_days = 4;
        $workoutPlan->type = 'Strength';
        $workoutPlan->difficulty = 'Advanced';
        $workoutPlan->link = 'https://www.t-nation.com/workouts/531-how-to-build-pure-strength';
        $workoutPlan->save();

        $workoutPlan = new \App\WorkoutPlan();
        $workoutPlan->name = 'PPL(3)';
        $workoutPlan->num_of_days = 3;
        $workoutPlan->type = 'Hypertrophy';
        $workoutPlan->difficulty = 'Beginner';
        $workoutPlan->link = 'http://www.simplyshredded.com/mega-feature-layne-norton-training-series-full-powerhypertrophy-routine-updated-2011.html';
        $workoutPlan->save();

        $workoutPlan = new \App\WorkoutPlan();
        $workoutPlan->name = 'PPL(6)';
        $workoutPlan->num_of_days = 6;
        $workoutPlan->type = 'Hypertrophy';
        $workoutPlan->difficulty = 'Advanced';
        $workoutPlan->link = 'https://www.reddit.com/r/Fitness/comments/37ylk5/a_linear_progression_based_ppl_program_for/';
        $workoutPlan->save();
    }
}
