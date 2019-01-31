<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resources;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class ResourcesController extends Controller
{

	//get the id of the loggedin user
	public function __construct()
    {
        $this->middleware('auth');
    }

	//show content (for now) by (one) Tags
	public function index(Request $request, $tagSlug = '')	
	{
		if($tagSlug){
			return Resources::where ('tags', $tagSlug)
			->get()->toJson();
		}
		return Resources::all()->toJson();
	}

	//show content searched by id of the post
	public function show(Request $request, $id) 
    {
        return Resources::find($id)->toJson();
    }

}