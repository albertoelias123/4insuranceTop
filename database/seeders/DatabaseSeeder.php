<?php

namespace Database\Seeders;

use App\Models\Pessoa;
use App\Models\User;
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
        Pessoa::factory(250)->create();
        $users = User::factory(250)->make()->all();
        foreach (Pessoa::all() as $key => $pessoa) {
            $pessoa->user()->save($users[$key]);
        }
        // User::factory(10)->create();
    }
}
