<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function approve(Event $event) {

        $event->update([
            'status' => 'approved'
        ]);

        return back();
    }

    public function reject(Event $event) {

        $event->update([
            'status' => 'rejected'
        ]);

        return back();
    }
}
