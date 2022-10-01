<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\UserStatus;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'admin',
            'operator',
            'applicant'
        ];
        foreach ($roles as $role) {
            Role::create([
                'name' => $role,
            ]);
        }

        $statuses = [
            'in progress',
            'accepted',
            'refused',
        ];
        foreach ($statuses as $status) {
            UserStatus::create([
                'name' => $status,
            ]);
        }
        \App\Models\User::factory(15)->create();

         \App\Models\User::factory()->create([
             'first_name' => 'Yandy',
             'second_name' => 'Jose',
             'first_lastname' => 'Lima',
             'second_lastname' => 'Perez',
             'married_name' => '',
             'date_of_birth' => '2001-10-06',
             'dpi' => '3117245070411',
             'profession' => 'Estudiante',
             'photo' => 'fotografía',
             'years_working' => '7',
             'salary' => '3500',
             'email' => 'meso.limayandy@gmail.com',
             'email_verified_at' => '2001-10-06',
             'password' => Hash::make('12345678'),
             'status_id' => 2,
             'role_id' => 1,
        ]);
    }
}
