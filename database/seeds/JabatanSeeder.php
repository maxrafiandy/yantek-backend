<?php

use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();
      // jabatan contains only 4 rows
      // 1: Kepala
      // 2: Kepala Seksi Pelayanan
      // 3: KASUBAG Tata Usaha
      // 4:
      DB::table('jabatan')->insert([
        'id' => 1,
        'nama' => 'Kepala',
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
      ]);

      DB::table('jabatan')->insert([
        'id' => 2,
        'nama' => 'Kepala Seksi Pelayanan Teknis',
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
      ]);

      DB::table('jabatan')->insert([
        'id' => 3,
        'nama' => 'KASUBAG Tata Usaha',
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
      ]);

      DB::table('jabatan')->insert([
        'id' => 4,
        'nama' => 'Kepala *)',
        'created_at' => $faker->dateTime($max = 'now', $timezone = null),
        'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
      ]);
    }
}
