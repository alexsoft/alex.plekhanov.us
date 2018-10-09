<?php declare(strict_types=1);
namespace Alex\Http\Controllers;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
