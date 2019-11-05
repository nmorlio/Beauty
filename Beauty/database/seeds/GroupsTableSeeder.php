<?php

use Illuminate\Database\Seeder;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Group::class, 5)->create()->each(function ($group)
        {
            $users = App\User::all();
                $usersSelected = $users->random(3);
                foreach ($usersSelected as $userSelected)
                {
                    $group->addUser($userSelected->id);
                }
    });
    }
}