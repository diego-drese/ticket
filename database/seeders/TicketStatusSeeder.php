<?php

namespace Database\Seeders;

use App\Models\TicketStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketStatusSeeder extends Seeder
{
    private array $data = [
        [
            'name' => 'Pendência',
            'color' => '#cecece',
            'is_default' => true,
            'order' => 1
        ],
        [
            'name' => 'Em andamento',
            'color' => '#ff7f00',
            'is_default' => false,
            'order' => 2
        ],
        [
            'name' => 'Finalizada',
            'color' => '#008000',
            'is_default' => false,
            'order' => 3
        ],
        [
            'name' => 'Arquivada',
            'color' => '#ff0000',
            'is_default' => false,
            'order' => 4
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if(!TicketStatus::first()){
            foreach ($this->data as $item) {
                TicketStatus::firstOrCreate($item);
            }
        }
    }
}
