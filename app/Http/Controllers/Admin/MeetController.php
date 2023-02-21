<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Meet;
class MeetController extends Controller
{
    /**
     * Display a listing of the resource.
     *@return \Illuminate\Http\Response
     */  
    
    public function index()
    {
        {
        
            $meets = Meet::all();
            return view('admin.meets.index',compact('meets'));
        }
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.meets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Meet::create([
            'title' => $request->title,
            'description' => $request->description,
            'meets_date' => $request->meets_date
        ]);
        return to_route('admin.meets.index')->with('success', 'Meet created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meet $meet)
    {
        return view('admin.meets.edit', compact('meet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Meet $meet)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'meets_date' => 'required'

        ]);
       
        $meet->update([
            
            'title' => $request->title,
            'description' => $request->description,
            'meets_date' => $request->meets_date , 
        ]);
            return to_route('admin.meets.index')->with('success', 'Meet updated successfully.');

        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Meet $meet)
    {
       
        $meet->delete();

        return to_route('admin.meets.index')->with('danger', 'Meet deleted successfully.');
    }
}
