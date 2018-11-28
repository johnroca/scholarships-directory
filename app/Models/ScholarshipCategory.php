<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ScholarshipCategory extends Pivot
{
	public $table = 'scholarship_categories';
}
