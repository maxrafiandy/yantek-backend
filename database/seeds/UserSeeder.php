<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        //use default user
        DB::table('users')->insert([
            'username' => 'bpfkyantek',
            'email' => 'bpfk.mks@yahoo.com',
            'password' => bcrypt('justdoit'),
            'firstname' => 'BPFK',
            'lastname' => 'Makassar',
            'permission' => 1,
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        // create 100 row of example data
        for ($i=0; $i < 100; $i++) {
          $firstname = $faker->firstName;
          $lastname = $faker->lastName;

          DB::table('users')->insert([
              'username' => strtolower($firstname.$lastname),
              'email' => strtolower($firstname.$lastname).'@gmail.com',
              'password' => bcrypt(strtolower($firstname.$lastname)),
              'firstname' => $firstname,
              'lastname' => $lastname,
              'permission' => $faker->biasedNumberBetween($min = 1, $max = 5, $function = 'sqrt'),
              'created_at' => $faker->dateTime($max = 'now', $timezone = null),
              'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
          ]);
        }
    }
}
