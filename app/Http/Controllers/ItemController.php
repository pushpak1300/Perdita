<?php

namespace App\Http\Controllers;

use App\Models\Communication;
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

    public function show(Item $item): Response
    {
        return Inertia::render('Items/Show',[
            'item' => $item
        ]);
    }

    public function edit(Item $item)
    {
        //
    }

    public function communicationStore(Request $request, Item $item)
    {
        $communication = Communication::create([
            'description' => $request->get('description'),
            'item_id' => $item->id,
            'sender_id' => Auth::id()
        ]);
        $communication->addMediaFromRequest('proof')->toMediaCollection();
        return redirect()->route('dashboard');
    }

    public function communicationIndex(Item $item)
    {
        return Inertia::render('Dashboard/Responses',[
            'responses' => $item->communications
        ]);
    }

    public function destroy(Item $item)
    {
        //
    }
}
