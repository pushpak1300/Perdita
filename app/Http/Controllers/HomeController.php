<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Home/Index');
    }

     public function dashboard(): Response
    {
        return Inertia::render('Dashboard/Index');
    }
}
