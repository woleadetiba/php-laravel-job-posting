<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // \App\Models\Listing::factory(10)->create();

        // Listing::create(
        //     [
        //         'title' => 'Tester',
        //         'tags' => 'Tester',
        //         'company' => 'Tester',
        //         'location' => 'Tester',
        //         'email' => 'Tester',
        //         'website' => 'Tester',
        //         'description' => 'Tester',
        //     ]
        // );


        // Listing::create(
        //     [
        //         'title' => 'Tester',
        //         'tags' => 'Tester',
        //         'company' => 'Tester',
        //         'location' => 'Tester',
        //         'email' => 'Tester',
        //         'website' => 'Tester',
        //         'description' => 'Tester',
        //     ]
        // );

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
