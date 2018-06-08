<?php

use Illuminate\Database\Seeder;

class AlatSeeder extends Seeder
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
        for ($i=11; $i < 80; $i++) {

          DB::table('alat')->insert([
              'kode' => $i,
              'nama' => $faker->company,
              'biaya' => $faker->biasedNumberBetween($min = 120000, $max = 1200000, $function = 'sqrt'),
              'durasi' => $faker->biasedNumberBetween($min = 30, $max = 120, $function = 'sqrt'),
              'jumlah_lampiran' => $faker->biasedNumberBetween($min = 1, $max = 5, $function = 'sqrt'),
              'jenis_alat_id' => $faker->biasedNumberBetween($min = 1, $max = 3, $function = 'sqrt'),
              'created_at' => $faker->dateTime($max = 'now', $timezone = null),
              'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
          ]);
        }
    }
}
