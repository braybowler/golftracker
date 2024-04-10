<?php

namespace App\Http\Controllers\Bag;

use App\Http\Controllers\Api\Controller;
use App\Models\Bag;
use Illuminate\Http\Request;

class WebBagClubController extends Controller
{
    public function index(Bag $bag)
    {
        $clubs = $bag->clubs;

        return view('club.index')->with([
            'clubs' => $clubs,
        ]);
    }

    public function create(Bag $bag)
    {
        return view('club.create');
    }

    public function store(Request $request)
    {
    }

    public function show(Bag $bag)
    {
    }

    public function edit(Bag $bag)
    {
    }

    public function update(Request $request, Bag $bag)
    {
    }

    public function destroy(Bag $bag)
    {
    }
}
