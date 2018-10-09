<?php declare(strict_types=1);
namespace Alex\Markdown;

use Parsedown;

class ErusevParser implements Parser
{
    /**
     * @param string $string
     * @return string
     */
    public function parse(string $string): string
    {
        return (new Parsedown())->parse($string);
    }
}
