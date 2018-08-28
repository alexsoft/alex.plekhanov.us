<?php

namespace Alex\Http\Controllers;

class PagesController extends Controller
{
    public function cv()
    {
        return response()
            ->view('pages.cv')
            ->header('Link', '</img/alex.jpg>; rel=preload; as=image');
    }
}
