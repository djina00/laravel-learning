<?php

namespace App\Http\Controllers;

use App\Events\PostCreateEvent;
use App\Mail\PostCreateMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Event and Listeners
        event(new PostCreateEvent("Jhon Doe"));


        //Observer
        //This is not with the rule of Single Responsibility Class principle from SOLID
        //For that reason we use Observer
        // $post = new Post();
        // $post->title = 'Test tittle';
        // $post->description = 'Test Description';
        // $post->save();

        //Mail::to('p@gmail.com')->send(new PostCreateMail());
        //dd($post);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
