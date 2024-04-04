<?php

namespace App\Http\Controllers;

use App\Models\GolfBag;
use Illuminate\Http\Request;

class GolfBagController extends Controller
{
    public function index()
    {
        $golfBag = GolfBag::query()
            ->where('user_id', auth()->user()->id)
            ->get();

        return view('golfbag.index')->with([
            'golfBag' => $golfBag,
        ]);
    }

    public function create()
    {
        return view('golfbag.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nickname' => '',
            'make' => '',
            'model' => '',
        ]);

        GolfBag::create([
            'user_id' => auth()->user()->id,
            'nickname' => $request->input('nickname'),
            'make' => $request->input('make'),
            'model' => $request->input('model'),
        ]);

        return redirect('/golfbags');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
