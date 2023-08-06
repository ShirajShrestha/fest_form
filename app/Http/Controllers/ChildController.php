<?php

namespace App\Http\Controllers;

use App\Models\child;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $child = Child::all();
        return view('form.show',compact('child'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form.insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'age' => 'required',
        //     'gender' => 'required',
        // ]);
    
        Child::create($request->all());
     
        return redirect()->route('form.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(child $child)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(child $child)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, child $child)
    {
        $child->update($request->all());
    
        return redirect()->route('form.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(child $child)
    {
        $child->delete();
    
        return redirect()->route('form.index');
    }
}
