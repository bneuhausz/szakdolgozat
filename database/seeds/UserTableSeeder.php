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
