<?php

namespace Database\Seeders;

use App\Models\TicketPriority;
use Illuminate\Database\Seeder;

class TicketPrioritySeeder extends Seeder
{
    private array $data = [
        [
            'name' => 'Baixa',
            'color' => '#008000',
            'is_default' => false
        ],
        [
            'name' => 'Normal',
            'color' => '#CECECE',
            'is_default' => true
        ],
        [
            'name' => 'Alta',
            'color' => '#ff0000',
            'is_default' => false
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if(!TicketPriority::first()){
            foreach ($this->data as $item) {
                TicketPriority::firstOrCreate($item);
            }
        }
    }
}
