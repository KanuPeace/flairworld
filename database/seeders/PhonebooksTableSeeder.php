<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PhonebooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\phonebook::class, 10)->create();              
    }
}
