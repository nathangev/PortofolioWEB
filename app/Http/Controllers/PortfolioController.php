<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PortfolioController extends Controller
{
    /**
     * Display Nathan's Blueprint & Bench portfolio page.
     */
    public function index(): View
    {
        $meta = config('portfolio.meta');
        $projects = config('portfolio.projects');
        $contact = config('portfolio.contact');

        return view('portfolio', compact('meta', 'projects', 'contact'));
    }
}
