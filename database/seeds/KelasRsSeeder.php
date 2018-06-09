<?php

use Illuminate\Database\Seeder;

class KelasRsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // default for kelas_rs
        DB::table('kelas_rs')->insert([
            'id' => 1,
            'nama' => 'A',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('kelas_rs')->insert([
            'id' => 2,
            'nama' => 'B',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('kelas_rs')->insert([
            'id' => 3,
            'nama' => 'C',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('kelas_rs')->insert([
            'id' => 4,
            'nama' => 'D',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('kelas_rs')->insert([
            'id' => 5,
            'nama' => 'Pratama',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);
    }
}
