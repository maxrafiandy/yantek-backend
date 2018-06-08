<?php

use Illuminate\Database\Seeder;

class PenyelenggaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // penyelenggara contains only 3 rows
        // 1: Pemerintah
        // 2: Swasta
        // 3: BUMN
        DB::table('penyelenggara')->insert([
            'id' => 1,
            'nama' => 'Pemerintah',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('penyelenggara')->insert([
            'id' => 2,
            'nama' => 'Swasta',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('penyelenggara')->insert([
            'id' => 3,
            'nama' => 'BUMN',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);
    }
}
