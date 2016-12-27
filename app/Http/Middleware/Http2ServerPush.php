<?php

namespace Alex\Http\Middleware;

use Closure;

class Http2ServerPush
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response =  $next($request);

        $images = ['/img/alexey@2x.jpg', '/img/php.png', '/img/laravel5.png', '/img/js.png', '/img/html5.png'];

//        Link: <https://example.com/other/styles.css>; rel=preload; as=style
        foreach ($images as $image) {
            $response->headers->set('Link', '<' . asset($image) . '>; rel=preload; as=image', false);
        }

        return $response;
    }
}
