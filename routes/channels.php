<?php

use Illuminate\Support\Facades\Broadcast;

//pre-build
Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

//my code
Broadcast::channel('chat', function($user){

    return true;

});
