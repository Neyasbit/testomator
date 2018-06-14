<?php

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

/**
 * Class AdminSeeder
 */
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Fake Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
            'api_token' => 'Xy4Tj3jxhz9Og0i1Ywf5VyYx1dKko8bk8HSzWQbrS9YRkBCbXqajQ9h4kfEV',
        ]);
        $user->attachRole(Role::whereName(Role::ADMIN_ROLE)->first());
    }
}
