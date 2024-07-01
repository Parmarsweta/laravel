<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\server;

class ServerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $servers = collect([
            [
                'name' => 'sweta parmar',
                'email'=> 'swetaparmar@gmail.com'
            ],
            [
                'name' => 'kasu parekh',
                'email'=> 'kasu@gmail.com'
            ],
            [
                'name' => 'kinjal makwana',
                'email'=> 'kinjal@gmail.com'
            ],
            [
                'name' => 'nikita panchal',
                'email'=> 'nikita@gmail.com'
            ]
            ]);

            $servers->each(function($server)
            {
                server::insert($server);
            });

        server::create([
            'name' =>'Asmita parmar',
            'email' => 'Asmita@gmail.com'
        ]);
    }
}

