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
        DB::table('students')->insert([
            'title'=>'Code Review',
            'body'=>'Dry,Fail Fast,Comment'
        ]);
    } 
}
