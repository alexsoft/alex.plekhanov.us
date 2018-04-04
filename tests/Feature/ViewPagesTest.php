<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewPagesTest extends TestCase
{
    /** @test */
    public function anyone_can_see_main_page()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Alex Plekhanov');
        $response->assertSee('Being a huge fan of PHP and Laravel');
    }

    /** @test */
    public function anyone_can_see_projects_page()
    {
        $response = $this->get('/projects');

        $response->assertStatus(200);
        $response->assertSee('Services');
        $response->assertSee('Libraries');
    }

    /** @test */
    public function anyone_can_see_blog_page()
    {
        $response = $this->get('/blog');

        $response->assertStatus(200);
        $response->assertSee('Blog');
        $response->assertSee('Get Encrypted');
        $response->assertSee('Interesting PHP question');
    }

    /** @test */
    public function anyone_can_see_cv_page()
    {
        $response = $this->get('/cv');

        $response->assertStatus(200);
        $response->assertSee('Alex Plekhanov');
        $response->assertSee('PHP Developer');
        $response->assertSee('Currently');
        $response->assertSee('Previous experience');
        $response->assertSee('Education');
        $response->assertSee('Skills');
        $response->assertSee('Laravel');
        $response->assertSee('Hobbies');
    }
}
