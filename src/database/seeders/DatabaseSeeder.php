<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;
// use Database\Seeders\ContactSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(ContactSeeder::class);
        Contact::factory(35)->create();
    }
}
