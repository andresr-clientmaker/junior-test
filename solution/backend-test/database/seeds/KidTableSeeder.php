<?php

use Illuminate\Database\Seeder;
use App\Models\Kid;

class KidTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kid1 = new Kid();
        $kid1->name = 'Jhon';
        $kid1->last_name = 'Doe';
        $kid1->save();

        $kid2 = new Kid();
        $kid2->name = 'Juana';
        $kid2->last_name = 'De Arco';
        $kid2->save();
    }
}