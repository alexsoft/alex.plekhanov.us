<?php namespace Alex\Markdown;

use Parsedown;

class ErusevParser implements Parser {

	public function parse($string) {
		return (new Parsedown)->parse($string);
	}
}
