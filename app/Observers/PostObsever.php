<?php

namespace App\Observers;

use App\Mail\PostCreateMail;
use App\Models\Post;
use Illuminate\Support\Facades\Mail;

//php artisan make:observer PostObserver --model=Post
//it is not necessary to provide --model=Post it will automaticly connect by the name
class PostObsever
{
    /**
     * Handle the Post "created" event.
     */
    public function created(Post $post): void
    {
        //When in PostController is occured created event this function will be invoked

        //We also must specify in Providers/AppServiceProvider that PostObserver will observe Post Model
        Mail::to('p@gmail.com')->send(new PostCreateMail());
        
    }

    /**
     * Handle the Post "updated" event.
     */
    public function updated(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "deleted" event.
     */
    public function deleted(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     */
    public function restored(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     */
    public function forceDeleted(Post $post): void
    {
        //
    }
}
