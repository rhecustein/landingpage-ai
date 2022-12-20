<?php

namespace Modules\Landingai\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Modules\Tag\Entities\Landingai;

class LandingaiDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Disable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        /*
         * Landingais Seed
         * ------------------
         */

        // DB::table('landingais')->truncate();
        // echo "Truncate: landingais \n";

        Landingai::factory()->count(20)->create();
        $rows = Landingai::all();
        echo " Insert: landingais \n\n";

        // Enable foreign key checks!
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
