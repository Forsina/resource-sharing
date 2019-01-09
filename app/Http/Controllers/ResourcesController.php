<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resources;

class ResourcesController extends Controller
//class RetrievingRecords extends Controller
{

	public function index(Request $request, Resources $tags)
	{
		
		if($request->has ('tags')){

			return $data->where ('tags' => $request -> input('tags'))
			->get();
		}

		return Resources::all();

/*		$data = Resources::create([
			'title' => $request -> input('title'),
			'content' => $request -> input('content'),
			'url' => $request -> input('url'),
			'tags' => $request -> input('tags'),
		]);*/
	}
	


    public function records(Request $tags)
    {
    	return response()->json(['name' => 'Abigail', 'state' => 'CA'])
    }

}