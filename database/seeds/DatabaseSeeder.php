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
        $exercise->video = "link";
        $exercise->save();

        $exercise = new \App\Exercise();
        $exercise->name_en = "EZ-Bar Curl";
        $exercise->name_hu = "Bicepsz Francia Rúddal";
        $exercise->description_en = "asdasdsad";
        $exercise->description_hu = "asdasdasdasdasdas";
        $exercise->musclegroup_id = "2";
        $exercise->exercisetype_id = "2";
        $exercise->video = "link";
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

        $exerciseType = new \App\ExerciseType();
        $exerciseType->name_en = "Cardio";
        $exerciseType->name_hu = "Kardió";
        $exerciseType->save();
    }
}

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

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = "admin";
        $user->email = "admin@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "1";
        $user->save();

        $user = new \App\User();
        $user->name = "user1";
        $user->email = "user1@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user2";
        $user->email = "user2@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user3";
        $user->email = "user3@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user4";
        $user->email = "user4@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user5";
        $user->email = "user5@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user6";
        $user->email = "user6@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user7";
        $user->email = "user7@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user8";
        $user->email = "user8@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user9";
        $user->email = "user9@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user10";
        $user->email = "user10@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user11";
        $user->email = "user11@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user12";
        $user->email = "user12@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user13";
        $user->email = "user13@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();

        $user = new \App\User();
        $user->name = "user14";
        $user->email = "user14@bneuhausz.com";
        $user->password = bcrypt('v9gm2c3j');
        $user->verified = "1";
        $user->verificationToken = null;
        $user->language = "hu";
        $user->admin = "0";
        $user->save();
    }
}