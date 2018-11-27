<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    protected $fillable = ['title', 'scholarship_id'];

    public function scholarship()
	{
		return $this->belongsTo(Scholarship::class);
	}
}
