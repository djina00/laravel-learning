<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\api\v1\BlogStoreRequest;
use App\Models\Blog2;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Blog2::all();
        return response()->json($posts, 200);
    }
    function store(BlogStoreRequest $request){

        $post = new Blog2();
        $post->title = $request->title;
        $post->description = $request->description;
       // $post->image = $request->image;
        $post->author_id = $request->author_id;
        $post->save();

        return response()->json($post, 201);


    }

    function show($id){
        $post = Blog2::findOrFail($id);
        return response()->json($post, 200);
    }

    function update(BlogStoreRequest $request, $id){
        $post = Blog2::findOrFail($id);
        $post->title = $request->title;
        $post->description = $request->description;
       // $post->image = $request->image;
        $post->author_id = $request->author_id;
        $post->save();

        return response()->json(['message' => 'Updated Successfully'], 200);

    }
    function destroy($id){
        $post = Blog2::findOrFail($id);
        $post->delete();
        return response()->json(['message' => 'Deleted Successfully'], 200);
    }

    function search(Request $request){
        if($request->has('q')){
            $posts = Blog2::where('title', 'like', '%' . $request->q . '%')->get();
        }

        return response()->json([], 200);
    }
}
