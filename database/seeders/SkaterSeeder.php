<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkaterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skaters')->insert([
            'name' => 'Patrick Odey',
            'age'  => '23',
            'state' => 'Cross River',
            'stance' => 'Goofy'
        ]);
    }
}
