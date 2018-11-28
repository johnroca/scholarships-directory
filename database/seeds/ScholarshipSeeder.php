<?php

use Illuminate\Database\Seeder;
use App\Models\Scholarship;
use App\Models\ScholarshipCategory;

class ScholarshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$data = $this->data();

    	foreach ($data as $key => $datum) {
    		
    		foreach ($datum['scholarships'] as $key => $scholarship) {
    			$scholarship = Scholarship::create($scholarship);

    			ScholarshipCategory::create([
    				'category_id' => $datum['category'],
    				'scholarship_id' => $scholarship->id
    			]);
    		}
    	}
    }

    public function data()
    {
    	return [
    		[
    			'category' => 1, // Academic Scholarships
    			'scholarships' => [
    				[
    					'title' 	=> 'Entrance Scholarship',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'Entrance Scholarship',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				]
    			]
    		],
    		[
    			'category' => 2, // Non Academic Scholarships
    			'scholarships' => [
    				[
    					'title' 	=> 'College Supreme Student Council',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'LNU Athletics',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'LNU An Lantawan Publication',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'LNU Brass Band, Rondalla & String Ensemble',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'LNU Chorale',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'LNU Dance Troupe',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'Sanguniang Kabataan Scholarship Grant',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'Barangay Scholarship Grant',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'One Town One Scholar',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'LNU Faculty and Staff Dependents Scholarship',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'Field Supervising Teacher Education Scholarship (for GraduateSchool)',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'Provincial Scholarship',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				]
    			]
    		],
    		[
    			'category' => 3, // Academic Scholarships
    			'scholarships' => [
    				[
    					'title' 	=> 'DOST-SEI Scholarship Program',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'Congressional District Scholarship Grant',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'Sen. Pangilinan Scholarship Program',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'An Waray Party List',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'Pres. Diosdado Macapagal Scholars',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'Cong. Cirilo “Roy” Montejo Scholarship',
    					'provider'	=> 'CHED Full Merit Scholars',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'CHED Half Merit Scholars',
    					'provider'	=> 'CHED National Scholars',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'CHED Student Assistance Fund for Education',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'Cong. Ferdinand Martin Romualdez Scholarship',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'Study Grant Program for Uniformed Personnel and their Qualified Dependents.',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'OFWDSP',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'PVAO Scholars',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'GSIS Scholars',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'Study Now Pay Later',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'Tulong Dunong Scholarship',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    			]
    		],
    		[
    			'category' => 4, // Academic Scholarships
    			'scholarships' => [
    				[
    					'title' 	=> 'Camurdi',
    					'provider'	=> 'Kathie M. Wright Foundation Scholarship Grant',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'Alumni Scholarship',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'Albarracin Scholarship Grant',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'Jollibee Scholarship',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				],
    				[
    					'title' 	=> 'Edward & Eva Underwood Charitable Foundation',
    					'provider'	=> 'Leyte Normal University',
    					'institution_id' => 1, //Leyte Normal University Seeds
    					'description' => ''
    				]
    			]
    		],
    	];
    }
}
