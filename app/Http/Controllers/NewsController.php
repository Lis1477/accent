<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function index(): View | RedirectResponse
    {
        // если есть кука города
        if (request()->cookie('current_city')) {
            // берм slug
            $slug = json_decode(request()->cookie('current_city'))->slug;

            // редиректим на новости города
            return redirect('/'.$slug.'/news');
        } else {
            return view('news');
        }
    }

    public function news($slug): View
    {
        // todo берем новости выбранного города
        return view('news');
    }
}
