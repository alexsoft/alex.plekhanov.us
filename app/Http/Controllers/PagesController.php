<?php namespace Alex\Http\Controllers;

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
                'lastmod'    => '2015-11-02',
                'changefreq' => 'monthly',
                'priority'   => '0.7'
            ],
            [
                'loc'        => 'cv',
                'lastmod'    => '2015-11-03',
                'changefreq' => 'monthly',
                'priority'   => '0.9'
            ],
            [
                'loc'        => 'blog',
                'lastmod'    => '2015-09-30',
                'changefreq' => 'monthly',
                'priority'   => '0.5'
            ],
            [
                'loc'        => 'blog/2015/09/php-question',
                'lastmod'    => '2015-09-30',
                'changefreq' => 'yearly',
                'priority'   => '0.5'
            ],
            [
                'loc'        => 'blog/2015/07/blog-v3',
                'lastmod'    => '2015-07-13',
                'changefreq' => 'yearly',
                'priority'   => '0.5'
            ],
        ];

        return response(view('pages.sitemap')->with(compact('pages')), 200, ['Content-Type' => 'application/xml']);
    }
}
