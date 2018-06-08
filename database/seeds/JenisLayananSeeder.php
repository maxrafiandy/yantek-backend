<?php

use Illuminate\Database\Seeder;

class JenisLayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // jenis_layanan contains only 4 rows
        // 1: X-ray
        // 2: Non X-ray
        // 3: Sarana
        // 4: Gabung
        DB::table('jenis_layanan')->insert([
            'id' => 1,
            'nama' => 'Pengujian',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('jenis_layanan')->insert([
            'id' => 2,
            'nama' => 'Kalibrasi',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('jenis_layanan')->insert([
            'id' => 3,
            'nama' => 'Sarana',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('jenis_layanan')->insert([
            'id' => 4,
            'nama' => 'Gabung',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);
    }
}
