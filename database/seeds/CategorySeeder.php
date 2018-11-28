<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$categories = $this->data();

    	foreach ($categories as $key => $category) {
    		Category::create($category);
    	}
    }

    public function data()
    {
    	return [
    		[
    			'title' => 'Academic',
    			'slug'	=> 'academic'
    		],
    		[
    			'title' => 'Non-Academic',
    			'slug'	=> 'non-academic'
    		],
    		[
    			'title' => 'Government Scholarship',
    			'slug'	=> 'government-scholarship'
    		],
    		[
    			'title'	=> 'Privately Funded Scholarship',
    			'slug'	=> 'privately-funded-scholarship'
    		]
    	];
    }
}
