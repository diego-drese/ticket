<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (User::where('email', 'diego.neumann.drese@gmail.com')->count() == 0) {
            $user = User::create([
                'name' => 'Diego Neumann',
                'email' => 'diego.neumann.drese@gmail.com',
                'password' => bcrypt('Passw@rd'),
                'creation_token' => Str::random(32),
                'email_verified_at' => now()
            ]);
            $user->save();
        }

        if (User::where('email', 'tiagomaggiborges@gmail.com')->count() == 0) {
            $user = User::create([
                'name' => 'Tiago Maggi',
                'email' => 'tiagomaggiborges@gmail.com',
                'password' => bcrypt('Passw@rd'),
                'creation_token' => Str::random(32),
                'email_verified_at' => now()
            ]);
            $user->save();
        }
    }
}
