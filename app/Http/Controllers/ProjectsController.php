<?php

namespace Alex\Http\Controllers;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('projects.index');
    }
}