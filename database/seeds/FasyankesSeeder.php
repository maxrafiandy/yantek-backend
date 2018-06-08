<?php

use Illuminate\Database\Seeder;

class FasyankesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // jenis_alat contains only 6 rows
        // 1: Rumah sakit
        // 2: Puskesmas
        // 3: Balai
        // 4: Klinik
        // 5: Praktek
        // 6: Lainnya
        DB::table('fasyankes')->insert([
            'id' => 1,
            'nama' => 'Rumah sakit',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('fasyankes')->insert([
            'id' => 2,
            'nama' => 'Puskesmas',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('fasyankes')->insert([
            'id' => 3,
            'nama' => 'Balai',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('fasyankes')->insert([
            'id' => 4,
            'nama' => 'Klinik',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('fasyankes')->insert([
            'id' => 5,
            'nama' => 'Praktek',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('fasyankes')->insert([
            'id' => 6,
            'nama' => 'Lainnya',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);
    }
}
