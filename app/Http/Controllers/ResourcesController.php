<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resources;

class ResourcesController extends Controller
{

	public function index(Request $request, $tagSlug = '')
	{
		if($tagSlug){
			return Resources::where ('tags', $tagSlug)
			->get()->toJson();
		}
		return Resources::all()->toJson();
	}


	public function show(Request $request, $id)
    {
    	
        return Resources::find($id)->toJson();
    }
    
}