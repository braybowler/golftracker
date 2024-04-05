<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use Illuminate\Http\Request;

class BagController extends Controller
{
    public function index()
    {
        $bags = Bag::query()
            ->where('user_id', auth()->id())
            ->get();

        return view('bag.index')->with([
            'bags' => $bags,
        ]);
    }

    public function create()
    {
        return view('bag.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nickname' => 'nullable',
            'make' => 'nullable',
            'model' => 'nullable',
        ]);

        Bag::create([
            'user_id' => auth()->id(),
            'nickname' => $request->input('nickname'),
            'make' => $request->input('make'),
            'model' => $request->input('model'),
        ]);

        return redirect('/bags');
    }

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
