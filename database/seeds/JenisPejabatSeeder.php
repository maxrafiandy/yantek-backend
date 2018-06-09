<?php

use Illuminate\Database\Seeder;

class JenisPejabatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        // default for jenis_pejabat
        DB::table('jenis_pejabat')->insert([
            'id' => 1,
            'nama' => 'Direktur',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('jenis_pejabat')->insert([
            'id' => 2,
            'nama' => 'Kepala',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('jenis_pejabat')->insert([
            'id' => 3,
            'nama' => 'Kepala Cabang',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('jenis_pejabat')->insert([
            'id' => 4,
            'nama' => 'Manajer',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('jenis_pejabat')->insert([
            'id' => 5,
            'nama' => 'Pimpinan',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);

        DB::table('jenis_pejabat')->insert([
            'id' => 6,
            'nama' => 'Regional Operation Manager',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);
    }
}
