<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class SiteController extends Controller
{
    public function __invoke(): View
    {
        return view('site.index');
    }

    public function certificate(): View
    {
        return view('site.certificate.index');
    }

    public function experience(): View
    {
        return view('site.experience.index');
    }

    public function projects(): View
    {
        return view('site.projects.index');
    }
}
