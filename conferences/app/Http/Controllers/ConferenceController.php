<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConferenceRequest;
use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    
    public function index()
    {
        $conferences = Conference::orderBy('date', 'asc')->get();
        return view('conferences.index', compact('conferences'));
    }

    public function create()
    {
        return view('conferences.create');
    }

    public function store(ConferenceRequest $request)
    {
        Conference::create($request->validated());

        return redirect()
            ->route('conferences.index')
            ->with('success', __('messages.conference_created'));
    }

    public function show(Conference $conference)
    {
        return view('conferences.show', compact('conference'));
    }

    public function edit(Conference $conference)
    {
        return view('conferences.edit', compact('conference'));
    }

    public function update(ConferenceRequest $request, Conference $conference)
    {

        $conference->update($request->validated());

        return redirect()
            ->route('conferences.index')
            ->with('success', __('messages.conference_updated'));
    }

    public function destroy(Conference $conference)
    {

        $conference->delete();

        return redirect()
            ->route('conferences.index')
            ->with('success', __('messages.conference_deleted'));
    }
}
