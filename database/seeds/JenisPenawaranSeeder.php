<?php

use Illuminate\Database\Seeder;

class JenisPenawaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // penawaran contains only 2 rows
        // 1: penawaran terjadwal
        // 2: penawaran tidak terjadwal
        DB::table('jenis_penawaran')->insert([
            'id' => 1,
            'nama' => 'Terjadwal',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('jenis_penawaran')->insert([
            'id' => 2,
            'nama' => 'Tidak terjadwal',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

    }
}
