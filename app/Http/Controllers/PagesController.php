<?php

namespace Alex\Http\Controllers;

class PagesController extends Controller
{
    public function cv()
    {
        return response()
            ->view('pages.cv')
            ->header('Link', '</img/alex2.jpg>; rel=preload; as=image');
    }
}
