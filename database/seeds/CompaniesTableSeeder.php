<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Company::class, 10)->create()->each(function ($u) {
            $u->fuels()->attach([1,2,3,4,5,6]);
        });
    }
}
