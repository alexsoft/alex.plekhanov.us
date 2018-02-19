<?php

namespace Alex\Console\Commands;

use Kurenai\DocumentParser;
use Illuminate\Console\Command;
use Illuminate\Contracts\Filesystem\Filesystem;
use Symfony\Component\Console\Output\OutputInterface;

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
     * Create a new command instance.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @param Filesystem     $file
     * @param DocumentParser $parser
     *
     * @return mixed
     */
    public function handle(Filesystem $file, DocumentParser $parser)
    {
        $posts = $file->files('resources/posts');

        $verbosity = $this->getOutput()->getVerbosity();

        if ($verbosity === OutputInterface::VERBOSITY_DEBUG) {
            $this->info('We have such posts files: '.json_encode($posts));
        }

        $postsInfo = [];

        foreach ($posts as $post) {
            $fileName = substr($post, strrpos($post, '/') + 1);

            list($year, $month, $urlTitle, $key, $date) = $this->extractParts($fileName);

            $document = $parser->parse($file->get($post));

            $postsInfo[$key] = [
                'text'  => $document->getHtmlContent(),
                'date'  => $date,
                'title' => $document->get('title'),
                'file'  => $post,
                'url'   => [
                    'year'  => $year,
                    'month' => $month,
                    'title' => $urlTitle,
                ],
            ];
        }

        if ($verbosity === OutputInterface::VERBOSITY_DEBUG) {
            $this->info('We have such posts info: '.json_encode($postsInfo));
        }

        $reversedPostsInfo = array_reverse($postsInfo);

        if ($verbosity === OutputInterface::VERBOSITY_DEBUG) {
            $this->info('We have such reversed posts info: '.json_encode($reversedPostsInfo));
        }

        $file->put($this->scannedPostsPath, serialize($reversedPostsInfo));

        $this->info(sprintf('Now you have [%d] posts', count($postsInfo)));

        $fileSize = $file->size($this->scannedPostsPath);

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
}
