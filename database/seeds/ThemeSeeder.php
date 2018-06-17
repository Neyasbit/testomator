<?php

use App\Models\Theme;
use Illuminate\Database\Seeder;

/**
 * Class ThemeSeeder
 */
class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Theme::class, 1)->create();
    }
}
