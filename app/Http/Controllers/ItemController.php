<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
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
        //
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
