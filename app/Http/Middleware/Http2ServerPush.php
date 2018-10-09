<?php declare(strict_types=1);
namespace Alex\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class Http2ServerPush
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        /** @var Response $response */
        $response =  $next($request);

        $links = [
            [
                'url' => '/js/gtm.js',
                'as' => 'script',
            ],
            [
                'url' => '/js/navbar.js',
                'as' => 'script',
            ],
            [
                'url' => '/css/custom2.css',
                'as' => 'style',
            ],
        ];

//        Link: <https://example.com/other/styles.css>; rel=preload; as=style
        foreach ($links as $link) {
            $response->headers->set('Link', '<' . $link['url'] . '>; rel=preload; as=' . $link['as'], false);
        }

        return $response;
    }
}
