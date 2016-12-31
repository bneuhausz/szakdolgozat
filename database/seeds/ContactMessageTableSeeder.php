<?php

use Illuminate\Database\Seeder;

class ContactMessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contactMessage = new \App\ContactMessage();
        $contactMessage->sender = "ContactMessage1";
        $contactMessage->email = "asd@asd.com";
        $contactMessage->subject = "ContactMessage1";
        $contactMessage->body = "texttexttexttexttexttexttexttexttexttexttext";
        $contactMessage->save();

        $contactMessage = new \App\ContactMessage();
        $contactMessage->sender = "ContactMessage2";
        $contactMessage->email = "asd@asd.com";
        $contactMessage->subject = "ContactMessage2";
        $contactMessage->body = "asdsadsadtexttexttexttexttexttexttexttexttexttexttext";
        $contactMessage->save();

        $contactMessage = new \App\ContactMessage();
        $contactMessage->sender = "ContactMessage3";
        $contactMessage->email = "asd@asd.com";
        $contactMessage->subject = "ContactMessage3";
        $contactMessage->body = "texttexttexttexttexttsadsadsadsadexttexttexttexttexttextsad";
        $contactMessage->save();
    }
}
