<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chatRoom;
use App\Models\chatMessage;
use Illuminate\Support\Facades\Auth;
use App\Events\NewChatMessage;



class ChatController extends Controller
{
    public function rooms( Request $request)
    {
        return chatRoom::all();
      
    }
    public function messages( Request $request, $roomId)
    {
        return chatMessage::where('chat_room_id', $roomId)
        ->with('user')
        ->orderBy('created_at', 'DESC')
        ->get();
        
      
    }
    public function newMessage( Request $request, $roomId )
    {
       $newMessage= new chatMessage;
       $newMessage->user_id = Auth::id(); 
       $newMessage->chat_room_id = $roomId;
       $newMessage->message = $request->message;
       $newMessage->save();
        broadcast(new NewChatMessage( $newMessage ))->toOthers();
       return $newMessage;
    }
}
