<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ResourcesId;

class ResourcesIdController extends Controller
{
/*    public function show(ResourcesId $resource)
    {
    	return $resource;
    }*/

      public function show($id)
    {
        return ResourcesId::find($id);
    }
}
