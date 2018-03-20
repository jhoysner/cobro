<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name' => 'Admin',
           'email' => 'Admin@admin.com',
           'type_id' => '1',
           'password' => bcrypt('123456'),
        ]);

        factory(User::class, 20)->create();

    }
}
