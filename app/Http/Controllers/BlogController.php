<?php namespace Alex\Http\Controllers;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }

    public function post($year, $month, $title)
    {
    }
}
