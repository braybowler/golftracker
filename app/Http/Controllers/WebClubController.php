<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\Controller;
use App\Models\Club;
use Illuminate\Http\Request;

class WebClubController extends Controller
{
    public function index(Request $request)
    {
        $user = auth()->user();

        $clubs = $user->clubs()->get();

        return view('club.index')->with([
            'clubs' => $clubs,
        ]);
    }

    public function create()
    {
        return view('club.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'nullable',
            'make' => 'nullable|string',
            'model' => 'nullable|string',
            'average_carry' => 'nullable|integer',
            'average_total' => 'nullable|integer',
        ]);

        Club::create([
            'user_id' => auth()->id(),
            'type' => $request->input('nickname'),
            'make' => $request->input('make'),
            'model' => $request->input('model'),
            'average_carry' => $request->input('average_carry'),
            'average_total' => $request->input('average_total'),
        ]);

        return redirect('/clubs');

    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
}
