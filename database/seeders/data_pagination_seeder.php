<?php

namespace Database\Seeders;

use App\Models\data_pagination;

use Illuminate\Database\Seeder;

class data_pagination_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        data_pagination::factory(2000)->create();
    }
}
