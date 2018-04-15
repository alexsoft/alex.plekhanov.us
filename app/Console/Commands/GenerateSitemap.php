<?php

namespace Alex\Console\Commands;

use DateTime;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap';

    protected $blogPostsLastModifiedDate = '2018-04-05';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        SitemapGenerator::create(config('app.url'))
            ->hasCrawled(function (Url $url) {
                if ($url->path() === '') {
                    return;
                }

                $url->setChangeFrequency('monthly')
                    ->setLastModificationDate($this->getLastModifiedDateForPath($url->path()));

                // index page
                if ($url->segments() === []) {
                    $url->setPriority(0.7);

                    return $url;
                }

                if ($url->segment(1) === 'cv') {
                    $url->setPriority(0.9);

                    return $url;
                }

                if ($url->segment(1) === 'blog') {
                    $url->setChangeFrequency('yearly');

                    if (count($url->segments()) === 1) {
                        $url->setPriority(0.5);
                    } else {
                        $url->setPriority(0.3);
                    }

                    $url->setLastModificationDate(new DateTime($this->blogPostsLastModifiedDate));

                    return $url;
                }

                $url->setPriority(0.8);

                return $url;
            })
            ->writeToFile(public_path('sitemap.xml'));
    }

    /**
     * @param string $path
     * @return DateTime
     */
    private function getLastModifiedDateForPath(string $path): DateTime
    {
        $pathsToDates = [
            '/' => '2018-04-05',
            '/cv' => '2018-04-05',
            '/projects' => '2018-04-05',
            '/blog' => '2018-04-05',
        ];

        if (array_key_exists($path, $pathsToDates)) {
            return new DateTime($pathsToDates[$path]);
        }

        return new DateTime('now');
    }
}
