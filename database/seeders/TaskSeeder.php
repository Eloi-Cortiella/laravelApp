<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Seeder;
use mysql_xdevapi\TableInsert;
use Nette\Schema\Schema;
use function Laravel\Prompts\table;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Task::factory(10)->create();
    }
}
