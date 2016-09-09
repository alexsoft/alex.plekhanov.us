<?php

namespace Alex;

use Illuminate\Contracts\Filesystem\Filesystem;

class Blog
{
    protected $files;

    protected $directory;

    public function __construct(Filesystem $files)
    {
        $this->files = $files;

        $this->directory = env('BLOG_DIR', '/resources/posts/');
    }
}
