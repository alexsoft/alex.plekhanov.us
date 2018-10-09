<?php

namespace Alex\Http\Controllers;

use Illuminate\Contracts\Filesystem\Filesystem;

class PostsController extends Controller
{
    protected $files;

    protected $scanned;

    public function __construct(Filesystem $files)
    {
        $this->files = $files;

        $scannedFile = 'storage/app/posts.scanned';

        abort_unless($this->files->exists($scannedFile), 404);

        $this->scanned = unserialize($this->files->get($scannedFile));
    }

    public function index()
    {
        return view('blog.index')->withPosts($this->scanned);
    }

    public function show($year, $month, $title)
    {
        $key = $year . '/' . $month . '/' . $title;

        if (!array_key_exists($key, $this->scanned)) {
            abort(404);
        }

        $title = $this->scanned[$key]['title'];

        $text = $this->scanned[$key]['text'];

        return view('blog.post')->with(compact('text', 'title'));
    }
}
