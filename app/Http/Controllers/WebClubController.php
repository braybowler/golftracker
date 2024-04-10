<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;

class WebClubController extends Controller
{
    public function index()
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
