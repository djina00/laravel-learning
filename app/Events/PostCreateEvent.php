<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PostCreateEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    //to make this file -> php artisan make:event
    //then create listener -> php artisan make:listener which should listen to PostCreateEvent
    
    /**
     * Create a new event instance.
     */
    public function __construct(public $name)//we can define variable directly inside constructor
    {

        //when this event is occured from PostConroller the listener(PostCreateListener) 
        //will automaticly executed

        
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */








     //build in function
    // public function broadcastOn(): array
    // {
    //     return [
    //         new PrivateChannel('channel-name'),
    //     ];
    // }
}
