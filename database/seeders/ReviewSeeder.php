<?php

namespace Database\Seeders;

use App\Models\Model\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::factory()->times(count:300)->create();
    }
}
