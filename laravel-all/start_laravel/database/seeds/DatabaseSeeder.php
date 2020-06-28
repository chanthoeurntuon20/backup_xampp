<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        // insert date to table
        DB::table('posts')->insert([
            'title'=>'code review',
            'body'=>'final code reveiw',

        ]);
    }
}
