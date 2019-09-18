<?php

namespace Alex\Markdown;

use Illuminate\Support\ServiceProvider;
use P7v\Mrk\Parsers\Content\ContentParser;
use P7v\Mrk\Parsers\Content\ParsedownParser;
use P7v\Mrk\Parsers\Meta\IniParser;
use P7v\Mrk\Parsers\Meta\MetaParser;

class MarkdownServiceProvider extends ServiceProvider
{
    public $singletons = [
        ContentParser::class => ParsedownParser::class,
        MetaParser::class => IniParser::class,
    ];

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Parser::class, ErusevParser::class);
    }
}
