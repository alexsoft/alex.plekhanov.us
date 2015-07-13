<?php namespace Alex\Http\Controllers;

use Illuminate\Contracts\Filesystem\Filesystem;

class BlogController extends Controller
{
    protected $files;

    protected $scanned;

    public function __construct(Filesystem $files)
    {
        $this->files = $files;

        $scannedFile = 'storage/app/posts.scanned';

        if (!$this->files->exists($scannedFile)) {
            abort(404);
        }

        $this->scanned = unserialize($this->files->get($scannedFile));
    }

    public function index()
    {
        return view('blog.index')->withPosts($this->scanned);
    }

    public function post($year, $month, $title)
    {
        $key = $year . '/' . $month . '/' . $title;

        if (!array_key_exists($key, $this->scanned)) {
            abort(404);
        }

        $file = $this->files->get($this->scanned[$key]['file']);

        $parts = explode('---', $file);
        $content = $parts[2];

        $title = $this->scanned[$key]['title'];

        $text = app('Alex\Markdown\Parser')->parse($content);

        return view('blog.post')->with(compact('text', 'title'));
    }
}
