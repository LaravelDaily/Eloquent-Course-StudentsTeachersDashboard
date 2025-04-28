<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    public function run(): void
    {
        Grade::factory(100000)
            ->make()
            ->chunk(500)
            ->each(function($chunk) {
                Grade::insert($chunk->toArray());
            });
    }
}
