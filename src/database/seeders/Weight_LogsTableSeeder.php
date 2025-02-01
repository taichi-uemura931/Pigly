<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Weight_Log;

class Weight_LogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Weight_Log::factory()->count(35)->create();
    }
}
