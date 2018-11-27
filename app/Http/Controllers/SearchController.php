<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Scholarship;

class SearchController extends Controller
{
	public function index(Request $request)
	{
		$search = $request->search;
    	$scholarships = Scholarship::search($search)->get();

    	return view('search', compact('scholarships', 'search'));
	}
}
