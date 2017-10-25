<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 100;)
        {
            $faker = new \Faker\Factory();
            DB::table('tbl_projects')->insert([
                'customer_id'       => $i++,
                'applications'      => $faker->paragraph($nbSentences = 6, $variableNbSentences = true),
                'hardware'          => $faker->paragraph($nbSentences = 6, $variableNbSentences = true),
                'operating_system'  => $faker->paragraph($nbSentences = 6, $variableNbSentences = true),
                'active'            => $faker->boolean($chanceOfGettingTrue = 25)
            ]);
        }
    }
}
