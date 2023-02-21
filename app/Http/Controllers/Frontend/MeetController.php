<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Meet;
use Illuminate\Http\Request;

class MeetController extends Controller
{
    public function index()
    {
        $meets = Meet::all();
        return view('meets.index', compact('meets'));
    }

    public function show(Meet $meet)
    {
        return view('meets.show', compact('meet'));
    }
}
