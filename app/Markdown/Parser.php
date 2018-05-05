<?php

namespace Alex\Markdown;

interface Parser
{
    /**
     * @param string $string
     * @return string
     */
    public function parse(string $string): string;
}
