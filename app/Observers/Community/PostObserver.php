<?php

namespace App\Observers\Community;

use App\Models\Community\Post;
use App\Models\EventSourcing\EventLog;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     *
     * @param  \App\Models\Community\Post  $post
     * @return void
     */
    public function created(Post $post)
    {
        EventLog::create([
            'log' => 'New post created',
            'event' => 'App\Models\Community\Post::created'
        ]);
    }

    /**
     * Handle the Post "updated" event.
     *
     * @param  \App\Models\Community\Post  $post
     * @return void
     */
    public function updated(Post $post)
    {
        //
    }

    /**
     * Handle the Post "deleted" event.
     *
     * @param  \App\Models\Community\Post  $post
     * @return void
     */
    public function deleted(Post $post)
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     *
     * @param  \App\Models\Community\Post  $post
     * @return void
     */
    public function restored(Post $post)
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     *
     * @param  \App\Models\Community\Post  $post
     * @return void
     */
    public function forceDeleted(Post $post)
    {
        //
    }
}
