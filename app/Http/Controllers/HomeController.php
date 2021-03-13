<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
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
        return Inertia::render('Dashboard/Index');
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
