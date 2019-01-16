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

    //connectin to editModal
     public function getModalForm() {

        return view('../layouts/partials/editModal');
    }

    //filling the editModal with data
	public function createPost(Request $request)
	{
        $post = Post::create(array(
            'title' => Input::get('title'),
            'content' => Input::get('content'),
            'url' => Input::get('url'),
            'tags' => Input::get('tags'),
            'author' => Auth::user()->id
        ));
        return redirect()->route('demo')->with('success', 'Post has been successfully added!');
    }

    
}