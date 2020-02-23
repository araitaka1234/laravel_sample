<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->delete();

        User::create([
            'name' => 'sample',
            'email' => 'sample@sample.com',
            'password' => bcrypt('0000')
        ]);

        User::create([
            'name' => 'example',
            'email' => 'example@sample.com',
            'password' => bcrypt('0001')
        ]);
    }
}
