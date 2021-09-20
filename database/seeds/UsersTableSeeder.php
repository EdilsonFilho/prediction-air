<?php

use App\Enums\ProfilesType;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\User::class)->create([
            'name' => 'Administrador',
            'phone' => '(85) 98837-5721',
            'email' => 'contato@gmail.com',
            'profile' => ProfilesType::ZeroRoleValue
        ]);
    }
}
