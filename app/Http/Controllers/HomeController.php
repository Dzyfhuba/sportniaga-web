<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $preview = Item::inRandomOrder()->limit(5)->get();

        $category = array(
            "aaaa",
            "bbbb",
            "cccc",
            "dddd",
            "eeee",
            "aaaa",
            "bbbb",
            "cccc",
            "dddd",
            "eeee",
            "aaaa",
            "bbbb",
            "cccc",
            "dddd",
            "eeee",
            "aaaa",
            "bbbb",
            "cccc",
            "dddd",
            "eeee",
            "aaaa",
            "bbbb",
            "cccc",
            "dddd",
            "eeee",
            "aaaa",
            "bbbb",
            "cccc",
            "dddd",
            "eeee",
        );

        return view('pages.home', [
            'preview' => $preview,
            'category' => $category,
        ]);
    }
}
