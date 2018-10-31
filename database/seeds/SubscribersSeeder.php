<?php

use Illuminate\Database\Seeder;

class SubscribersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subscribers')->insert([
            [
                'name'=>"Name1",
                'email'=>"some1@gmail.test",
                //'url_subscribe'=>"00001",
                'active'=>1

            ],
            [
                'name'=>"Name2",
                'email'=>"some2@gmail.test",
                //'url_subscribe'=>"00002",
                'active'=>1
            ],
            [
                'name'=>"Name3",
                'email'=>"some3@gmail.test",
                //'url_subscribe'=>"00003",
                'active'=>1
            ],
            [
                'name'=>"Name4",
                'email'=>"some4@gmail.test",
                //'url_subscribe'=>"00004",
                'active'=>1
            ],
            [
                'name'=>"Name5",
                'email'=>"some5@gmail.test",
                //'url_subscribe'=>"00005",
                'active'=>1
            ],
            [
                'name'=>"Name6",
                'email'=>"some6@gmail.test",
                //'url_subscribe'=>"00006",
                'active'=>1
            ]
        ]);

    }
}
