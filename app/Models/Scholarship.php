<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
	protected $fillable = ['title', 'institution_id', 'provider'];

	public function requirements()
	{
		return $this->hasMany(Requirement::class);
	}

	public function qualifications()
	{
		return $this->hasMany(Qualification::class);
	}
}
