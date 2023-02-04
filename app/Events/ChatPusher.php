<?php

namespace App\Events;

// use App\Models\User;
// use App\Models\Reaction;
// use App\Models\ChatRoomUser;
// use App\Models\ChatRoom;
use App\Models\ChatMessage;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChatPusher implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

// public $chat_message;
    public $message;
// private $message;

// public function __construct(ChatMessage $chat_message)
//     {
//         $this->chat_message = $chat_message;
//     }

    public function __construct($message)
    {
        $this->message = $message;
    }
    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
// public function broadcastOn()
//     {
//         return new Channel('ChatRoomChannel');
//     }
    public function broadcastOn()
    {
        return new Channel('ChatRoomChannel');
    }
}
