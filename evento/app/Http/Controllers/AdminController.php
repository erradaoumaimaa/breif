<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function events() {

        $events = Event::with('category', 'user')->get();
        return view('admin.events', compact('events'));
    }
}
