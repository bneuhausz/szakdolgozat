<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(ExerciseTableSeeder::class);
        $this->call(ExerciseTypeTableSeeder::class);
        $this->call(MuscleGroupsTableSeeder::class);
    }
}
