<?php

namespace App\Http\Controllers;

use App\Models\Update;
use Illuminate\Http\Request;

class RecentUpdateController extends Controller
{
    public function index()
    {
        $updates = Update::latest()->limit(5)->get();
        return view('recent_updates', compact('updates'));
    }
}
