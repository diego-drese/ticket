<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    private array $data = [
        [
            'name' => 'Testando',
            'description' => 'Atividades relacionadas a testes'
        ],
        [
            'name' => 'Aprendizado',
            'description' => 'Atividades relacionadas com a aprendizagem e formação'
        ],
        [
            'name' => 'Pesquisa',
            'description' => 'Atividades relacionadas à pesquisa'
        ],
        [
            'name' => 'Outras',
            'description' => 'Outras atividades relacionadas'
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        if(Activity::first()){
            foreach ($this->data as $item) {
                Activity::firstOrCreate($item);
            }
        }

    }
}
