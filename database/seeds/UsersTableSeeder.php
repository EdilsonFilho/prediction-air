<?php

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
            'name' => 'Ronald Araújo',
            'phone' => '(85) 98837-5721',
            'email' => 'f.ronaldaraujo@gmail.com',
            'profile' => config('profile.administrator')
        ]);

        factory(App\Models\User::class)->create([
            'name' => 'Luana Ibiapina',
            'phone' => '(85) 99663-1567',
            'email' => 'luanaibiapina1@hotmail.com',
            'profile' => config('profile.administrator')
        ]);
    }
}
