<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatRoom extends Model
{
    // use HasFactory;
public function chatRoomUsers()
    {
        return $this->hasMany('App\Models\ChatRoomUser');
    }

    public function chatMessages()
    {
        return $this->hasMany('App\Models\ChatMessage');
    }
}
