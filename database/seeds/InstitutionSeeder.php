<?php

use Illuminate\Database\Seeder;
use App\Models\Institution;

class InstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Institution::create([
    		'name'	=> 'Leyte Normal University'
    	]);
    }
}
