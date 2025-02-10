<?php

namespace Database\Seeders;

use App\Models\ProjectStatus;
use Illuminate\Database\Seeder;

class ProjectStatusSeeder extends Seeder
{
    private array $data = [
        [
            'name' => 'Iniciada',
            'color' => '#0953d1',
            'is_default' => true
        ],
        [
            'name' => 'Em Planejamento',
            'color' => '#02998b',
            'is_default' => false
        ],
        [
            'name' => 'Concluída',
            'color' => '#5bcf00',
            'is_default' => false
        ],
        [
            'name' => 'Com impedimentos',
            'color' => '#e00909',
            'is_default' => false
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        if(!ProjectStatus::first()){
            foreach ($this->data as $item) {
                ProjectStatus::firstOrCreate($item);
            }
        }
    }
}
