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
        $response->assertSee('Alexey Plekhanov');
        $response->assertSee('I am a huge fan of PHP and Laravel! I use it constantly, and do my best to contribute and improve all of it :)');
    }

    /** @test */
    public function anyone_can_see_projects_page()
    {
        $response = $this->get('/projects');

        $response->assertStatus(200);
        $response->assertSee('Services');
        $response->assertSee('Libraries');
        $response->assertSee('I am PHP developer');
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
        $response->assertSee('Alexey Plekhanov');
        $response->assertSee('PHP Developer');
        $response->assertSee('Currently');
        $response->assertSee('Previous experience');
        $response->assertSee('Education');
        $response->assertSee('Skills');
        $response->assertSee('Laravel');
        $response->assertSee('Hobbies');
    }
}