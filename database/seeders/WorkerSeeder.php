<?php

namespace Database\Seeders;

use App\Models\Worker;
use Illuminate\Database\Seeder;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Worker::create([
            'role' => 'admin',
            'hours' => 40
        ]);
    }
}
