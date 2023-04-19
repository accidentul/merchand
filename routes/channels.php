<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/
// Broadcast::channel('chat-room.{roomId}', function ($user, $roomId) {
//     return ['id' => $user->id, 'name' => $user->name];
// });

// Broadcast::event(ChatMessageSent::class, function ($event) {
//     return [
//         'message' => $event->message,
//     ];
// });

Broadcast::channel('chat', function ($user) {
    return "test";
});