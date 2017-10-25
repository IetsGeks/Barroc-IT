<?php

use Illuminate\Database\Seeder;

class InvoicesTableSeeder extends Seeder
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
            DB::table('tbl_invoices')->insert([
                'project_id'        => $i++,
                'offer_status'      => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'prospect'          => $faker->boolean($chanceOfGettingTrue = 50),
                'date_of_action'    => $faker->dateTimeThisYear($min = '+1 month'),
                'last_contactdate'  => $faker->dateTimeBetween($startDate = '-1 month', $endDate = 'now'),
                'next_action'       => $faker->dateTimeBetween($startDate = 'now', $endDate = '+1 month'),
                'sale_percentage'   => $faker->numberBetween($min = 0, $max = 100),
                'creditworthy'      => $faker->boolean($chanceOfGettingTrue = 90)
            ]);
        }
    }
}
