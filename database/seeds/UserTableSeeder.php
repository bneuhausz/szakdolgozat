<?php

use Illuminate\Database\Seeder;

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
    }
}
