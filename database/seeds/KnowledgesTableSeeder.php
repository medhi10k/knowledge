<?php

use Illuminate\Database\Seeder;

class KnowledgesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('knowledges')->insert([
            [
                'q_name' => 'picasso-peintre',
                'status' => 'active',
                'happened_at' => NULL,
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'q_name' => 'armistice-1918',
                'status' => 'active',
                'happened_at' => Carbon\Carbon::createFromDate(1918, 11, 11),
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ],
            [
                'q_name' => 'concorde-premier-vol',
                'status' => 'active',
                'happened_at' => Carbon\Carbon::createFromDate(1969, 3, 2),
                'created_at' => Carbon\Carbon::now(),
                'updated_at' => Carbon\Carbon::now(),
            ]
        ]);
    }
}
