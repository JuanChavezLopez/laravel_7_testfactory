<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard(); // Disable mass assignment

        $this->call(UserTableSeeder::class);
        // $this->call(PostTableSeeder::class);

        Model::reguard(); // Enable mass assignmentvvv
    }
}
