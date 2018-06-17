<?php

use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);

        if (App::environment() != 'production') {
            $this->call(AdminSeeder::class);
            $this->call(UserSeeder::class);
            $this->call(ThemeSeeder::class);
            $this->call(TestSeeder::class);
            $this->call(QuestionSeeder::class);
        }
    }
}
