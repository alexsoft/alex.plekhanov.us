@extends('_layouts.bulma')

@section('page_title', 'CV - Alex.Plekhanov.us')

@section('content')

    <div class="content">

        <h1 class="accent">Alexey Plekhanov</h1>
        <h2>PHP Developer</h2>

        <div class="columns">

            <div class="column">
                <p>Birthday: 22 December 1993</p>
                <meta itemprop="birthDate" content="1993-12-22" />
                <p itemscope itemtype="http://schema.org/PostalAddress">
                    Location: <span itemprop="addressCountry">Poland</span>, <span itemprop="addressLocality">Wrocław</span> <span class="flag-icon flag-icon-pl"></span>
                </p>
                <p>Email: {!! Html::mailto('alex@plekhanov.us') !!}</p>
            </div>
            <div class="column">
                <p>
                    <i class="fa fa-fw fa-facebook-official fa-2x"></i> <a href="https://www.facebook.com/alexplekhanov" itemprop="sameAs">alexplekhanov</a>
                </p>
                <p>
                    <i class="fa fa-fw fa-github fa-2x"></i> <a href="https://github.com/alexsoft" itemprop="sameAs">alexsoft</a>
                </p>
                <p>
                    <i class="fa fa-fw fa-telegram fa-2x"></i> <a href="https://t.me/alexplekhanov" itemprop="sameAs">alexplekhanov</a>
                </p>
            </div>

        </div>

        <h2 class="accent">Currently</h2>

        <h4 itemprop="jobTitle"><strong>PHP Developer</strong></h4>
        <p>June 2015 &mdash; Present</p>
        <p><span itemprop="worksFor"><i>908.vc</i></span> &mdash; Product Development</p>

        <h4><strong>Owner</strong></h4>
        <p>October 2016 &mdash; Present</p>
        <p><a href="https://deploykit.co"><i>Deploy Kit</i></a> &mdash; Single click deployment for PHP applications</p>

        <h2 class="accent">Previous experience</h2>

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
        <p>I have quite a strong experience working with Laravel (4 and 5).</p>
        <p>I have experience working with:</p>
        <ul>
            <li>Nginx + PHP-FPM</li>
            <li>Apache</li>
            <li>Git</li>
            <li>Less (brief experience)</li>
            <li>Gulp (brief experience)</li>
        </ul>

        <div class="block">
            <p class="title is-5"><strong>PHP</strong></p>
            <p class="subtitle is-6">4 years of experience</p>
        </div>

        <div class="block">
            <p class="title is-5"><strong>Laravel</strong></p>
            <p class="subtitle is-6">3.5 years of experience</p>
        </div>

        <div class="block">
            <p class="title is-5"><strong>MySQL</strong></p>
            <p class="subtitle is-6">4 years of experience</p>
        </div>

        <div class="block">
            <p class="title is-5"><strong>HTML + HTML5</strong></p>
            <p class="subtitle is-6">4 years of experience</p>
        </div>

        <div class="block">
            <p class="title is-5"><strong>CSS</strong></p>
            <p class="subtitle is-6">4 years of experience</p>
        </div>

        <div class="block">
            <p class="title is-5"><strong>Javascript</strong></p>
            <p class="subtitle is-6">4 years of experience</p>
        </div>

        <div class="block">
            <p class="title is-5"><strong>jQuery</strong></p>
            <p class="subtitle is-6">4 years of experience</p>
        </div>

        <div class="block">
            <p class="title is-5"><strong>Vue.js</strong></p>
            <p class="subtitle is-6">1.5 years of experience</p>
        </div>

        <div class="block">
            <p class="title is-5"><strong>MongoDB</strong></p>
            <p class="subtitle is-6">1 year of experience</p>
        </div>

        <div class="block">
            <p class="title is-5"><strong>English language</strong></p>
            <p class="subtitle is-6">Advanced. I have passed 3 Cambridge exams: KET, PET, FCE</p>
        </div>

        <h2 class="accent">Hobbies</h2>
        <p class="text-justify">
            As a hobby I investigate PHP frameworks, try to contribute to open-source frameworks especially Laravel/Lumen, develop composer packages and different tools.
        </p>
        <p class="text-justify">
            Also I am quite interested in Python, system administration (Ansible etc.) and web analytics.
        </p>
        <p class="text-justify">
            In my city I also do extreme city games (Encounter).
        </p>

    </div>

@endsection
