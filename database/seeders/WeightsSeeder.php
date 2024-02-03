<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weights')->truncate();

        DB::table('weights')->insert([
            'weight' => '220',
            'user_id' => '1',
            'created_at' => Carbon::now()->addDays(1)
        ]);
        DB::table('weights')->insert([
            'weight' => '219',
            'user_id' => '1',
            'created_at' => Carbon::now()->addDays(2)
        ]);
        DB::table('weights')->insert([
            'weight' => '218',
            'user_id' => '1',
            'created_at' => Carbon::now()->addDays(3)
        ]);
        DB::table('weights')->insert([
            'weight' => '218.5',
            'user_id' => '1',
            'created_at' => Carbon::now()->addDays(4)
        ]);
        DB::table('weights')->insert([
            'weight' => '218',
            'user_id' => '1',
            'created_at' => Carbon::now()->addDays(5)
        ]);
        DB::table('weights')->insert([
            'weight' => '217.5',
            'user_id' => '1',
            'created_at' => Carbon::now()->addDays(6)
        ]);
        DB::table('weights')->insert([
            'weight' => '216',
            'user_id' => '1',
            'created_at' => Carbon::now()->addDays(7)
        ]);
        DB::table('weights')->insert([
            'weight' => '215',
            'user_id' => '1',
            'created_at' => Carbon::now()->addDays(8)
        ]);
        DB::table('weights')->insert([
            'weight' => '216',
            'user_id' => '1',
            'created_at' => Carbon::now()->addDays(9)
        ]);
        DB::table('weights')->insert([
            'weight' => '210',
            'user_id' => '1',
            'created_at' => Carbon::now()->addDays(10)
        ]);
        DB::table('weights')->insert([
            'weight' => '210',
            'user_id' => '1',
            'created_at' => Carbon::now()->addDays(11)
        ]);


        DB::table('weights')->insert([
            'weight' => '228',
            'user_id' => '2',
            'created_at' => Carbon::now()->addDays(1)
        ]);
        DB::table('weights')->insert([
            'weight' => '217',
            'user_id' => '2',
            'created_at' => Carbon::now()->addDays(2)
        ]);
        DB::table('weights')->insert([
            'weight' => '217',
            'user_id' => '2',
            'created_at' => Carbon::now()->addDays(3)
        ]);
        DB::table('weights')->insert([
            'weight' => '216.5',
            'user_id' => '2',
            'created_at' => Carbon::now()->addDays(4)
        ]);
        DB::table('weights')->insert([
            'weight' => '216',
            'user_id' => '2',
            'created_at' => Carbon::now()->addDays(5)
        ]);
        DB::table('weights')->insert([
            'weight' => '215.5',
            'user_id' => '2',
            'created_at' => Carbon::now()->addDays(6)
        ]);
        DB::table('weights')->insert([
            'weight' => '214',
            'user_id' => '2',
            'created_at' => Carbon::now()->addDays(7)
        ]);
         DB::table('weights')->insert([
            'weight' => '213',
            'user_id' => '2',
            'created_at' => Carbon::now()->addDays(8)
        ]);
         DB::table('weights')->insert([
            'weight' => '213.5',
            'user_id' => '2',
            'created_at' => Carbon::now()->addDays(10)
        ]);
         DB::table('weights')->insert([
            'weight' => '212',
            'user_id' => '2',
            'created_at' => Carbon::now()->addDays(11)
        ]);
    }
}
