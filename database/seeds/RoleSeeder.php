<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

/**
 * Class RoleSeeder
 */
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'display_name' => 'Администратор',
            'description' => 'Пользователь, управляющий тестами',
        ]);

        Role::create([
            'name' => 'user',
            'display_name' => 'Пользователь',
            'description' => 'Зарегестрированный пользователь, который может проходить опросы',
        ]);
    }
}
