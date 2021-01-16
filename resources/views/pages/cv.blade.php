@extends('_layouts.default')

@section('page_title', 'CV - Alex Plekhanov')

@section('meta_description', 'Alex has more than 5 years of PHP development experience, works with Laravel & Vue.js.')

@section('css')
    @parent
    <style>.content .accent{color: #b64900}</style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
@endsection

@inject('countryFlags', '\Stidges\CountryFlags\CountryFlag')

@section('content')

    <div class="container" itemscope itemtype="http://schema.org/Person">
        <div class="columns">
            <div class="column">
                <div class="content">
                    <h1 class="accent"><span itemprop="givenName">Alex</span> <span itemprop="familyName">Plekhanov</span></h1>
                    <h2>Software Engineer, PHP</h2>
                </div>
            </div>
        </div>

        <div class="columns">

            <div class="column">

                <div class="columns" style="line-height: 2em;">

                    <div class="column">
                        <p itemscope itemtype="http://schema.org/PostalAddress">
                            Location: <span itemprop="addressCountry">Luxembourg</span>, <span itemprop="addressLocality">Schuttrange</span> {{ $countryFlags->get('LU') }}
                        </p>
                    </div>
                    <div class="column">
                        <p>
                            <i class="fab fa-fw fa-lg fa-github"></i> <a href="https://github.com/alexsoft" itemprop="sameAs">GitHub</a>
                        </p>
                    </div>

                </div>

                <div class="columns">
                    <div class="column">
                        <div class="content">

                            <h2 class="accent">Currently</h2>

                            <h4><strong>Software Engineer, PHP</strong></h4>
                            <p>November 2017 &mdash; Present</p>
                            <p><i>Undisclosed</i> &mdash; Live Streaming and Broadcasting company</p>

                            <h2 class="accent">Previous experience</h2>

                            <h4><strong>PHP Developer</strong></h4>
                            <p>Jun 2015 &mdash; Jul 2017</p>
                            <p><i>Stickerpipe (908.vc)</i> &mdash; API for camera content and stickers in messengers/keyboards</p>

                            <h4><strong>PHP Developer</strong></h4>
                            <p>Oct 2013 &mdash; May 2015</p>
                            <p><i>DataArt</i> &mdash; Software Development Company</p>

                            <h4><strong>PHP Developer</strong></h4>
                            <p>Apr 2013 &mdash; May 2013</p>
                            <p><i>FORFORCE</i> &mdash; Digital production</p>

                            <h4><strong>PHP Developer</strong></h4>
                            <p>Oct 2012 &mdash; Mar 2013</p>
                            <p><i>OWOX</i> &mdash; E-commerce</p>

                            <h2 class="accent">Education</h2>
                            <h4>Bachelor's degree</h4>
                            <p>Sep 2010 &mdash; Jun 2015</p>
                            <p>Dnipropetrovsk national university named after Oles Honchar. Applied mathematics faculty.</p>

                            <h4>High school</h4>
                            <p>Sep 2006 &mdash; Jun 2010</p>
                            <p>Lyceum of information technologies. Dnipropetrovsk.</p>

                            <h2 class="accent">Skills</h2>
                            <p>I have strong experience working with Laravel.</p>
                            <p>I have experience working with:</p>
                            <ul>
                                <li>nginx + PHP-FPM</li>
                                <li>Git</li>
                                <li>Servers' provisioning</li>
                            </ul>

                            <div class="block">
                                <p class="title is-5"><strong>PHP</strong></p>
                                <p class="subtitle is-6">7 years of experience</p>
                            </div>

                            <div class="block">
                                <p class="title is-5"><strong>Laravel</strong></p>
                                <p class="subtitle is-6">6 years of experience</p>
                            </div>

                            <div class="block">
                                <p class="title is-5"><strong>MySQL</strong></p>
                                <p class="subtitle is-6">7 years of experience</p>
                            </div>

                            <div class="block">
                                <p class="title is-5"><strong>HTML + HTML5</strong></p>
                                <p class="subtitle is-6">7 years of experience</p>
                            </div>

                            <div class="block">
                                <p class="title is-5"><strong>CSS</strong></p>
                                <p class="subtitle is-6">7 years of experience</p>
                            </div>

                            <div class="block">
                                <p class="title is-5"><strong>Javascript</strong></p>
                                <p class="subtitle is-6">7 years of experience</p>
                            </div>

                            <div class="block">
                                <p class="title is-5"><strong>Vue.js</strong></p>
                                <p class="subtitle is-6">4 years of experience</p>
                            </div>

                            <div class="block">
                                <p class="title is-5"><strong>English language</strong></p>
                                <p class="subtitle is-6">Advanced. I have passed 3 Cambridge exams: KET, PET, FCE</p>
                            </div>

                            <h2 class="accent">Hobbies</h2>
                            <p class="text-justify">
                                As a hobby I investigate PHP frameworks, try to contribute to open-source frameworks especially Laravel/Lumen, develop PHP packages and different tools.
                            </p>
                            <p class="text-justify">
                                Also I am quite interested in Python, system administration (Ansible etc.) and web analytics.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="column is-one-quarter">
                <figure class="image is-square">
                    <img src="{{ asset('/img/alex2021.jpg') }}" alt="Alex Plekhanov">
                </figure>
            </div>

        </div>

    </div>

@endsection
