<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Event;
use Illuminate\Database\Seeder;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Event::factory()->create([
            'name' => 'Sandra León',
            'description' => 'Curso de Programación',
            'spaces' => '26',
            'img' => 'https://www-static2.spulsecdn.net/pics/00/36/07/81/36078109_1_M.jpg',
            'datetime' => '2023-02-25 08:30:00',
        ]);

        Event::factory()->create([
            'name' => 'Álvaro Gariv',
            'description' => 'Curso de Imágen y Sonido',
            'spaces' => '20',
            'img' => 'https://www-static2.spulsecdn.net/pics/00/36/07/81/36078109_1_M.jpg',
            'datetime' => '2023-02-25 10:30:00',
        ]);

        Event::factory()->create([
            'name' => 'Antonio Garle',
            'description' => 'Curso de Golf',
            'spaces' => '10',
            'img' => 'https://www-static2.spulsecdn.net/pics/00/36/07/81/36078109_1_M.jpg',
            'datetime' => '2023-02-25 12:30:00',
        ]);

        Event::factory()->create([
            'name' => 'Sandra León',
            'description' => 'Introducción a la Programación',
            'spaces' => '20',
            'img' => 'https://www-static2.spulsecdn.net/pics/00/36/07/81/36078109_1_M.jpg',
            'datetime' => '2023-02-28 10:30:00',
        ]);
       Event::factory(28)->create(); 
    }
}
