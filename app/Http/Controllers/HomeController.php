<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Communication;
use App\Models\Item;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function index(Request $request): Response
    {
        if ($request->has('search')) {
            return Inertia::render('Home/Index', [
                'items' => Item::search($request->get('search'))->get()
            ]);
        }
        return Inertia::render('Home/Index', [
            'items' => Item::all()
        ]);
    }

    public function dashboard(): Response
    {
        return Inertia::render('Dashboard/Index', [
            'itemClaims' => Item::whereHas('communications', function (Builder $query) {
                $query->where('sender_id', Auth::id());
            })->get(),
            'itemPosted' => Auth::user()->items,
            ]);
    }

    public function profile(): Response
    {
        return Inertia::render('Profile/Index');
    }

    // Dashboard
    public function responses(): Response
    {
        return Inertia::render('Dashboard/Responses');
    }

    public function response(): Response
    {
        return Inertia::render('Dashboard/Response');
    }
}
