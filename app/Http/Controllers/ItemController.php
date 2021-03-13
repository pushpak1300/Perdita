<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class ItemController extends Controller
{
    public function index()
    {
        //
    }

    public function create(): Response
    {
        return Inertia::render('Items/Create');
    }

    public function store(Request $request)
    {
        $request = $request->validate([
            'title' => ['required', 'max:50'],
            'description' => ['required', 'max:250'],
            'date' => ['required', 'date'],
            'type' => ['required', 'string'],
            'reward' => ['nullable', 'date'],
            'location' => ['string'],
            'category_id' => ['required','int', 'exists:categories,id'],
        ]);

        $request['user_id'] = Auth::id();

        Item::create($request);
        return Redirect::route('home');
    }

    public function show(Item $item)
    {
        //
    }

    public function edit(Item $item)
    {
        //
    }

    public function update(Request $request, Item $item)
    {
        //
    }

    public function destroy(Item $item)
    {
        //
    }
}
