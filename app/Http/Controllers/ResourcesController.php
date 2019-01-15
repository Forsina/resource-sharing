<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resources;

class ResourcesController extends Controller
{

	public function index(Request $request, $tagSlug = '')	//show content (for now) by (one) Tags
	{
		if($tagSlug){
			return Resources::where ('tags', $tagSlug)
			->get()->toJson();
		}
		return Resources::all()->toJson();
	}

	public function show(Request $request, $id) //show content searched by id of the post
    {
        return Resources::find($id)->toJson();
    }

     public function getModalForm() {

        return view('../layouts/partials/editModal');
    }

    
}