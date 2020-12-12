<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }

}
use App\User;

User::create(['name' => 'Admin', 'email' => 'admin@gmail.com', password => bcrypt('Im_admin'), 'is_admin' => 1]);
