<?php namespace Alex\Http\Controllers;

class PagesController extends Controller
{
    public function cv()
    {
        return view('pages.cv');
    }
}
