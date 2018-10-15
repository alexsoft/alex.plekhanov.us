<?php

namespace Alex\Http\Controllers;

use Alex\Entities\Skill;

class PagesController extends Controller
{
    public function cv()
    {
        $skills = [
            new Skill('PHP', 2012),
            new Skill('Laravel', 2013),
            new Skill('MySQL', 2012),
            new Skill('HTML + HTML5', 2012),
            new Skill('CSS', 2012),
            new Skill('Javascript', 2012),
            new Skill('Vue.js', 2015),
        ];

        return response()
            ->view('pages.cv', compact('skills'))
            ->header('Link', '</img/alex2.jpg>; rel=preload; as=image');
    }
}
