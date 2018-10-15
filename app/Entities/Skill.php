<?php

declare(strict_types=1);

namespace Alex\Entities;

use Carbon\Carbon;

class Skill
{
    /** @var string */
    public $name;

    /** @var int */
    public $yearsOfExperience = 0;

    public function __construct(string $name, int $startingYear)
    {
        $this->name = $name;
        $this->setYearsOfExperience($startingYear);
    }

    private function setYearsOfExperience(int $startingYear)
    {
        $this->yearsOfExperience = Carbon::now()->year - $startingYear;
    }
}
