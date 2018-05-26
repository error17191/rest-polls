<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poll;

class PollsController extends Controller
{
    public function index()
    {
        return response()->json(Poll::all(), 200);
    }

    public function show(Poll $poll)
    {
        return response()->json($poll, 200);
    }

    public function store(Request $request)
    {
        $poll = Poll::create($request->all());
        return response()->json($poll, 201);
    }

    public function update(Request $request, Poll $poll)
    {
        $poll->update($request->all());
        return response()->json($poll, 200);
    }

    public function delete(Request $request, Poll $poll)
    {
        $poll->delete();
        return response()->json(null, 204);
    }
}
