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
            'email' => 'f.ronaldaraujo@gmail.com',
            'profile' => config('profile.administrator')
        ]);

        factory(App\Models\User::class)->create([
            'name' => 'Luana Ibiapina',
            'email' => 'luanaibiapina1@hotmail.com',
            'profile' => config('profile.administrator')
        ]);
    }
}
