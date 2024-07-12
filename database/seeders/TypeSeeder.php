<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newType = new Type();
        $newType->name = "Frontend";
        $newType->description = "Language: Javascript, HTML, CSS";
        $newType->icon = "fa-brands fa-js";
        $newType->save();

        $newType = new Type();
        $newType->name = "Backend";
        $newType->description = "Language: PHP";
        $newType->icon = "fa-brands fa-php";
        $newType->save();

        $newType = new Type();
        $newType->name = "Fullstack";
        $newType->description = "Language: Javascript, PHP";
        $newType->icon = "fa-brands fa-laravel";
        $newType->save();
    }
}
