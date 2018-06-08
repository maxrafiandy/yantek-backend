<?php

use Illuminate\Database\Seeder;

class JenisAlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // jenis_alat contains only 3 rows
        // 1: X-ray
        // 2: Non X-ray
        // 3: Sarana
        DB::table('jenis_alat')->insert([
            'id' => 1,
            'nama' => 'X-ray',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('jenis_alat')->insert([
            'id' => 2,
            'nama' => 'Non x-ray',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('jenis_alat')->insert([
            'id' => 3,
            'nama' => 'Sarana',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);
    }
}
