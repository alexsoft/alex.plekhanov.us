<?php

namespace Alex\Markdown;

use Illuminate\Support\ServiceProvider;
use Kurenai\Contracts\ContentParser;
use Kurenai\Contracts\MetadataParser;
use Kurenai\Parsers\Content\ParsedownParser;
use Kurenai\Parsers\Metadata\YamlParser;

class MarkdownServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Parser::class, ErusevParser::class);

        $this->app->singleton(ContentParser::class, ParsedownParser::class);
        $this->app->singleton(MetadataParser::class, YamlParser::class);
    }
}
