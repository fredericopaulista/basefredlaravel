<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        User::create([
                'id' => 1,
                'name' => 'Frederico',
                'email' => 'fredericopaulista@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$Q3OVqwisCz6THP16IqtVuetkU4WFrAZw4ThnvtYtwqn.B4tWOYTYm',
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'created_at' => '2023-08-01 02:39:35',
                'updated_at' => '2023-08-01 02:39:35',
            ])->assignRole('admin');
    }
}
