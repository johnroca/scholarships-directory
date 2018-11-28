<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Scholarship extends Model
{
	use Searchable;

	protected $fillable = ['title', 'institution_id', 'provider'];

	public function requirements()
	{
		return $this->hasMany(Requirement::class);
	}

	public function qualifications()
	{
		return $this->hasMany(Qualification::class);
	}

	public function institution()
	{
		return $this->hasOne(Institution::class, 'id', 'institution_id');
	}

	public function categories()
	{
		return $this->hasManyThrough(Category::class, ScholarshipCategory::class, 'id', 'id');
	}

	public function toSearchableArray()
	{
		$array = $this->toArray();
		
    	$array['requirements'] = $this->requirements->map(function ($data) {
	                             return $data['title'];
	                           })->toArray();

    	$array['institution'] = $this->institution->name;
    	
    	$array['qualifications'] = $this->qualifications->map(function ($data) {
	                             return $data['title'];
	                           })->toArray();

    	$array['categories'] = $this->categories->map(function ($data) {
	                             return $data['title'];
	                           })->toArray();
    	
    	return $array;
	}
}
