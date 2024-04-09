<?php

namespace App\Http\Controllers;

use App\Models\Bag;
use Illuminate\Http\Request;

class WebBagController extends Controller
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
        $bag = Bag::findOrFail($id);

        return view('bag.show')->with(['bag' => $bag]);
    }

    public function edit(string $id)
    {
        $bag = Bag::findOrFail($id);

        return view('bag.edit')->with(['bag' => $bag]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nickname' => 'nullable',
            'make' => 'nullable',
            'model' => 'nullable',
        ]);

        $bag = Bag::findOrFail($id);

        $bag->update([
            'nickname' => $request->input('nickname'),
            'make' => $request->input('make'),
            'model' => $request->input('model'),
        ]);

        return redirect('/bags');
    }

    public function destroy(string $id)
    {
        Bag::query()
            ->where('id', $id)
            ->where('user_id', auth()->id())
            ->delete();

        return redirect('/bags');
    }
}
