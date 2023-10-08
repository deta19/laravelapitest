<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Books;
use Faker\Factory as Faker;
use DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = \Faker\Factory::create();
        // for( $i=0; $i < 50; $i++ ) {
        //     Books:create([
        //         'name' => $faker->sentence,
        //         'author' => $faker->name,
        //         'publish_date' => $faker->date,
        //     ]);
        // }

        $faker = Faker::create();
        $songs = [];
        foreach(range(1, 10) as $index)
        {
            $songs[] = [
                'name' => $faker->sentence,
                'author' => $faker->name,
                'publish_date' => $faker->date,
            ];
        }

        DB::table('books')->insert($songs);
    }
}
