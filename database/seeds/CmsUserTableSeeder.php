<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CmsUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,1) as $key => $value) {
            DB::table('users')->insert([
                "name"=>$faker->lastName,
                "email"=>'info'.$value.'@test.com',
                "password"=>'$2y$10$IT27F/.eVh1NSRtI0SFttuD/v3.epGrtlnfepMaVxhXtaftaHHiNK',
                "created_at"=>now(),
                "updated_at"=>now()
            ]);
        }
    }
}
