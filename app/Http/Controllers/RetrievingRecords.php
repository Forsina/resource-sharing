<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class RetrievingRecords extends Controller
{
	public function __construct()
    {
        $this->middleware('tags');
    }

    public function records(Request $tags)
    {
    	return response()->json(['name' => 'Abigail', 'state' => 'CA'])
    }
}
