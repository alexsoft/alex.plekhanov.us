<?php

namespace Alex\Http\Controllers;

class PagesController extends Controller
{
    public function cv()
    {
        return view('pages.cv');
    }

    public function sitemap()
    {
        $pages = [
            [
                'loc'        => '/',
                'lastmod'    => '2017-07-23',
                'changefreq' => 'monthly',
                'priority'   => '0.7',
            ],
            [
                'loc'        => 'cv',
                'lastmod'    => '2017-07-23',
                'changefreq' => 'monthly',
                'priority'   => '0.9',
            ],
            [
                'loc'        => 'projects',
                'lastmod'    => '2017-02-06',
                'changefreq' => 'monthly',
                'priority'   => '0.8',
            ],
            [
                'loc'        => 'blog',
                'lastmod'    => '2016-09-18',
                'changefreq' => 'monthly',
                'priority'   => '0.5',
            ],
            [
                'loc'        => 'blog/2014/07/php-user-group',
                'lastmod'    => '2014-07-18',
                'changefreq' => 'yearly',
                'priority'   => '0.3',
            ],
            [
                'loc'        => 'blog/2014/12/it-talk-php-odessa',
                'lastmod'    => '2014-12-04',
                'changefreq' => 'yearly',
                'priority'   => '0.3',
            ],
            [
                'loc'        => 'blog/2014/12/php-user-group-3',
                'lastmod'    => '2014-12-18',
                'changefreq' => 'yearly',
                'priority'   => '0.3',
            ],
            [
                'loc'        => 'blog/2015/07/blog-v3',
                'lastmod'    => '2015-07-13',
                'changefreq' => 'yearly',
                'priority'   => '0.3',
            ],
            [
                'loc'        => 'blog/2015/09/php-question',
                'lastmod'    => '2015-09-30',
                'changefreq' => 'yearly',
                'priority'   => '0.3',
            ],
            [
                'loc'        => 'blog/2016/03/lets-get-encrypted',
                'lastmod'    => '2016-03-01',
                'changefreq' => 'yearly',
                'priority'   => '0.5',
            ],
        ];

        return response(view('pages.sitemap')->with(compact('pages')), 200, ['Content-Type' => 'application/xml']);
    }
}
