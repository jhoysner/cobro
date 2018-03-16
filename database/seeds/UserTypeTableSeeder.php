<?php

use App\UserType;
use Illuminate\Database\Seeder;

class UserTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserType::create([
                'nombre' => 'Juez',
        ]);

        UserType::create([
                'nombre' => 'Abogado',
        ]);        

        UserType::create([
                'nombre' => 'Coordinador',
        ]);        

        UserType::create([
                'nombre' => 'Secretaria',
        ]);        

    }
}
