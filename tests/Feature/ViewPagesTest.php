<?php

namespace Tests\Feature;

use Tests\TestCase;

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

    /** @test */
    public function anyone_can_see_countries_and_cities_page()
    {
        $response = $this->get('/travel/countries');

        $response->assertStatus(200);

        $countries = $this->app->make('countriesAndCities');

        foreach ($countries as $country) {
            $response->assertSee($country['name']);
            $response->assertSee(implode(', ', $country['cities']));
        }
    }
}
