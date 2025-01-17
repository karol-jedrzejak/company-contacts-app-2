<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Tasklists;
use Illuminate\Http\Request;

use Inertia\Inertia;
use Inertia\Response;

class TasklistsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasklists = Tasklists::where('user_id', Auth::id())->get();
        return Inertia::render('Tasklists/Index', ['items' => $tasklists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "store";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "update";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Tasklists::find($id)->delete();
    }
}
