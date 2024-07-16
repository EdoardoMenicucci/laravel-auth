<?php

namespace Database\Seeders;

use App\Models\Tecnology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TecnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTech = new Tecnology();
        $newTech->name = 'Laravel';
        $newTech->description = 'Framework PHP';
        $newTech->save();

        $newTech = new Tecnology();
        $newTech->name = 'Vue';
        $newTech->description = 'Framework JS';
        $newTech->save();

        $newTech = new Tecnology();
        $newTech->name = 'PHP';
        $newTech->description = 'Language';
        $newTech->save();

        $newTech = new Tecnology();
        $newTech->name = 'Javascript';
        $newTech->description = 'Language';
        $newTech->save();

        $newTech = new Tecnology();
        $newTech->name = 'CSS';
        $newTech->description = 'Language';
        $newTech->save();
    }
}
