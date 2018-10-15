<?php

declare(strict_types=1);

namespace Tests\Unit\Entities;

use Carbon\Carbon;
use Tests\TestCase;
use Alex\Entities\Skill;

class SkillTest extends TestCase
{
    /** @test */
    public function it_gets_skill_name()
    {
        $skill = new Skill('PHP', 2012);

        $this->assertEquals('PHP', $skill->name);
    }

    /** @test */
    public function it_returns_years_of_experience()
    {
        $skill = new Skill('PHP', 2012);

        $this->assertEquals(6, $skill->yearsOfExperience);
    }

    /** @test */
    public function it_returns_years_of_experience_with_test_year()
    {
        Carbon::setTestNow('2014-01-01');

        $skill = new Skill('PHP', 2012);

        $this->assertEquals(2, $skill->yearsOfExperience);
    }
}
