<?php

use App\Models\Test;
use Illuminate\Database\Seeder;

/**
 * Class TestSeeder
 */
class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Test::class, 15)->create();
    }
}
