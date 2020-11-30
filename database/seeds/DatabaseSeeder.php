<?php

use App\Models\Question;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // factory(User::class, 3)->create()->each(function($u){
        //     $u->questions()
        //         ->saveMany(
        //             factory(Question::class, rand(1, 5))->make()
        //         );
        // });

        foreach (range(1, 3) as $i)
        {
            factory(User::class)->create([
                'email' => "user{$i}@example.com",
                'name' => "User{$i}"
            ])->each(function($u){
                $u->questions()
                    ->saveMany(
                        factory(Question::class, rand(1, 5))->make()
                    );
            });
        }
    }
}
