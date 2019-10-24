<?php

use Illuminate\Database\Seeder;

class Group_UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 30; $i++) {
            DB::table('group_user')->insert(
                [
                    'user_id' => App\User::all()->random()->id,
                    'group_id' => App\Group::all()->random()->id
                ]  
            );
        }
    }
}
