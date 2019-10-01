<?php

namespace Alex\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Filesystem\Filesystem;
use P7v\Mrk\Entities\Input;
use P7v\Mrk\Parser;

class ScanPosts extends Command
{
    protected $scannedPostsPath = 'storage/app/posts.scanned';

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'alex:scan-posts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scan all posts and create file with titles';

    /**
     * @var Filesystem
     */
    protected $file;

    /**
     * @var Parser
     */
    protected $parser;

    /**
     * Create a new command instance.
     * @param Filesystem $file
     * @param Parser $parser
     */
    public function __construct(Filesystem $file, Parser $parser)
    {
        parent::__construct();

        $this->file = $file;
        $this->parser = $parser;
    }

    /**
     * Execute the console command.
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function handle()
    {
        $posts = $this->file->files('resources/posts');

        if ($this->getOutput()->isVerbose()) {
            $this->info('We have such posts files: ' . json_encode($posts));
        }

        $postsInfo = $this->processPostsFiles($posts);

        if ($this->getOutput()->isVerbose()) {
            $this->info('We have such posts info: ' . json_encode($postsInfo));
        }

        $reversedPostsInfo = array_reverse($postsInfo);

        if ($this->getOutput()->isVerbose()) {
            $this->info('We have such reversed posts info: ' . json_encode($reversedPostsInfo));
        }

        $this->file->put($this->scannedPostsPath, serialize($reversedPostsInfo));

        $this->info(sprintf('Now you have [%d] posts', count($postsInfo)));

        $fileSize = $this->file->size($this->scannedPostsPath);

        $this->info(sprintf('Size of file is [%d] bytes', $fileSize));
    }

    /**
     * @param string $fileName
     * @return array
     */
    private function extractParts($fileName)
    {
        $year = substr($fileName, 0, 4);
        $month = substr($fileName, 5, 2);
        $urlTitle = substr($fileName, 11, -3);
        $date = substr($fileName, 0, 10);
        $key = $year . '/' . $month . '/' . $urlTitle;

        return [$year, $month, $urlTitle, $key, $date];
    }

    /**
     * @param array $posts
     * @return array
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    private function processPostsFiles($posts)
    {
        $postsInfo = [];

        foreach ($posts as $post) {
            $fileName = substr($post, strrpos($post, '/') + 1);

            list($year, $month, $urlTitle, $key, $date) = $this->extractParts($fileName);

            $document = $this->parser->parse(Input::fromString($this->file->get($post)));

            $postsInfo[$key] = [
                'text'  => $document->getContent(),
                'date'  => $date,
                'title' => $document->getMeta()['title'],
                'file'  => $post,
                'url'   => [
                    'year'  => $year,
                    'month' => $month,
                    'title' => $urlTitle,
                ],
            ];
        }

        return $postsInfo;
    }
}
