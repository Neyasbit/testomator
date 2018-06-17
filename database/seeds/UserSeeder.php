<?php

use App\Models\User;
use Illuminate\Database\Seeder;

/**
 * Class UserSeeder
 */
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Alex',
            'email' => 'bakautovalex@gmail.com',
            'api_token' => 'Xy4Tj3jxhz9Og0i1Ywf5VyYx1dKko8bk8HSzWQbrS9YRkBCbXqajQ9h4kfdf',
            'password' => Hash::make('password'),
        ]);
    }
}
