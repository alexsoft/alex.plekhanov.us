<?php

namespace Alex\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

class Inspire extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'inspire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display an inspiring quote';

    public function handle(): void
    {
        $this->comment(PHP_EOL . Inspiring::quote() . PHP_EOL);
    }
}
