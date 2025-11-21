<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1.creation des roles
        $adminRole= Role::create(attributes:['name' => 'admin']);
        $userRole= Role::create(attributes:['name' => 'user']);


        //2.cree de ladministrateur
        $admin =  User::factory()->create(attributes:[
            'name' => 'Admin User',
            'email'=> 'admin@example.com',
            'password'=> bcrypt('password'),
        ]);

        //attribution du role admin au user admin
        $admin->assignRole($adminRole);
            
        //3. d'un user standar pour tester

        $user = User::factory()->create(attributes:[
            'name' => 'Alice  User',
            'email'=> 'user@higfive.com',
            'password'=> bcrypt('password'),
        ]);

        //attribution du role user au user alice ou utilisateur
        $user->assignRole($userRole);


        // User::factory(10)->create();

    //     User::factory()->create([
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',
    //     ]);
    }
}
