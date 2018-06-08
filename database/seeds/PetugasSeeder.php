<?php

use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      // create 100 row of example data
      for ($i=0; $i < 100; $i++)
      {

        DB::table('petugas')->insert([
          'nip' => $faker->numberBetween($min = 1, $max = 9).$faker->numberBetween($min = 0, $max = 9)
            .$faker->numberBetween($min = 0, $max = 9).$faker->numberBetween($min = 0, $max = 9)
            .$faker->numberBetween($min = 0, $max = 9).$faker->numberBetween($min = 0, $max = 9)
            .$faker->numberBetween($min = 0, $max = 9).$faker->numberBetween($min = 0, $max = 9)
            .$faker->numberBetween($min = 0, $max = 9).$faker->numberBetween($min = 0, $max = 9)
            .$faker->numberBetween($min = 0, $max = 9).$faker->numberBetween($min = 0, $max = 9)
            .$faker->numberBetween($min = 0, $max = 9).$faker->numberBetween($min = 0, $max = 9)
            .$faker->numberBetween($min = 0, $max = 9).$faker->numberBetween($min = 0, $max = 9),
          'nama' => $faker->firstName.' '.$faker->lastName,
          // 'keterangan' => numberBetween($min = 0, $max = 1),
          'created_at' => $faker->dateTime($max = 'now', $timezone = null),
          'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);
      }
    }
}
