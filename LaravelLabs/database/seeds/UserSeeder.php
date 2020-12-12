<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

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

User::create(['name' => 'Enzey', 'email' => 'admin@gmail.com',
    password => bcrypt('Im_admin'), 'is_admin' => 1]);
