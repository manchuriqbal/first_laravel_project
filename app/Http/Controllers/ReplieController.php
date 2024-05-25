<?php

namespace App\Http\Controllers;

use App\Models\Replie;
use App\Models\Ticket;
use App\Http\Requests\StoreReplieRequest;
use App\Http\Requests\UpdateReplieRequest;

class ReplieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReplieRequest $request, Ticket $ticket)
    {
        $reply = new Replie();
        $reply->body = $request->body;
        $reply->user_id = auth()->id();
        $reply->ticket_id = $ticket->id;
        $reply->save();

        return redirect()->route('ticket.show', $ticket)->with('success', 'Reply added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Replie $replie)
    {
        return view('replies.show', compact('replie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Replie $replie)
    {
        return view('replie.edit', compact('replie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReplieRequest $request, Replie $replie)
    {
        $replie->update($request->all());
        return redirect(route('ticket.show', $replie->ticket));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Replie $replie)
    {
        $ticket = $replie->ticket;
        $replie->delete();

        return redirect()->route('ticket.show', $ticket)->with('success', 'Reply deleted successfully');
    }
}
