<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        Listing::factory(6)->create();

        Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, go',
            'company' => 'Goc Uz',
            'location' => 'Toshken',
            'email' => 'sher@gmail.com',
            'website' => 'depozit.uz',
            'description' => 'The error message you are encountering indicates that the PHP extension for DOMDocument is not installed or enabled in your PHP configuration. The DOMDocument class is required by the "nunomaduro/termwind" package, which is used by the php artisan db:seed command.'
        ]);
         Listing::create([
            'title' => 'Golang Senior Developer',
            'tags' => 'laravel, go',
            'company' => ' Proxima',
            'location' => 'Toshkent',
            'email' => 'abdullajonov@gmail.com',
            'website' => 'arendo.uz',
            'description' => 'The error message you are encountering indicates that the PHP extension for DOMDocument is not installed or enabled in your PHP configuration. The DOMDocument class is required by the "nunomaduro/termwind" package, which is used by the php artisan db:seed command.'
        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
