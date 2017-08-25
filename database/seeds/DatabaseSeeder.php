<?php

use App\Models\House;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@rapide.software',
            'password' => 'secret'
        ]);

        foreach (range(0, 5) as $number) {
            House::create([
                'name' => 'House ' . $number,
                'user_id' => $user->id
            ]);
        }
    }
}
