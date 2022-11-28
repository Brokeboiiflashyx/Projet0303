<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('roles')->delete();

        Role::create(['name' => 'utilisateur']);
        Role::create(['name' => 'gestionnaire']);
        Role::create(['name' => 'administrateur']);

        User::create([
        'name' => 'Pseudo',
        'email' => 'colin@email.fr',
        'email_verified_at' => now(),
        'password' => bcrypt('password'),
        'remember_token' => '',
        'role_id' => 3,
        ]);
      User::factory()->count(5)->create();
    }
}
