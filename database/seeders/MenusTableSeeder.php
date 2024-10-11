<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Menu::firstOrCreate([
            'name' => 'admin',
        ]);
    }
}
