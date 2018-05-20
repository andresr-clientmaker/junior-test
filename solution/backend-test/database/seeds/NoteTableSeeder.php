<?php

use Illuminate\Database\Seeder;
use App\Models\Note;

class NoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $note1 = new Note();
        $note1->note = 'Whatever meggings jean shorts, pabst adaptogen drinking vinegar chambray XOXO flexitarian kale chips cold-pressed af fashion axe.';
        $note1->id_kid = '1';
        $note1->save();

        $note2 = new Note();
        $note2->note = 'Normcore put a bird on it gastropub kickstarter kogi umami street art adaptogen echo park art party franzen succulents.';
        $note2->id_kid = '1';
        $note2->save();

        $note3 = new Note();
        $note3->note = 'Mustache hexagon jean shorts mlkshk etsy, copper mug farm-to-table cardigan shabby chic leggings vexillologist.';
        $note3->id_kid = '2';
        $note3->save();
    }
}