@extends('_layouts.default')

@section('page_title', 'CV - Alex.Plekhanov.us')

@section('content')

    <h1 class="accent">Alexey Plekhanov</h1>
    <h2>PHP Developer</h2>

    <div class="row">
        <div class="col-sm-6">
            <p>Birthday: 22 December 1993</p>
            <meta itemprop="birthDate" content="1993-12-22" />
            <p itemscope itemtype="http://schema.org/PostalAddress">
                Location: <span itemprop="addressCountry">Poland</span>, <span itemprop="addressLocality">Wrocław</span> <span class="flag-icon flag-icon-pl"></span>
            </p>
            <p>Email: {!! Html::mailto('alex@plekhanov.us') !!}</p>
        </div>
        <div class="col-sm-3">
            <p>
                <i class="fa fa-fw fa-github fa-2x"></i> <a href="http://github.com/alexsoft" itemprop="sameAs">alexsoft</a>
            </p>
            <p>
                <i class="fa fa-fw fa-telegram fa-2x"></i> <a href="https://telegram.me/alexplekhanov" itemprop="sameAs">@alexplekhanov</a>
            </p>
        </div>
    </div>

    <h3 class="accent">Currently</h3>

    <h4 itemprop="jobTitle">PHP Developer</h4>
    <p>June 2015 &mdash; Present</p>
    <p><span itemprop="worksFor"><i>908.vc</i></span> &mdash; Product Development</p>

    <h4 itemprop="jobTitle">Owner</h4>
    <p>October 2016 &mdash; Present</p>
    <p><a href="https://deploykit.co"><i>Deploy Kit</i></a> &mdash; Single click deployment for PHP applications</p>

    <h3 class="accent">Previous experience</h3>

    <h4>PHP Developer</h4>
    <p>Oct 2013 &mdash; May 2015</p>
    <p><i>DataArt</i> &mdash; Software Development Company</p>

    <h4>PHP Developer</h4>
    <p>Apr 2013 &mdash; May 2013</p>
    <p><i>FORFORCE</i> &mdash; Digital production</p>

    <h4>PHP Developer</h4>
    <p>Oct 2012 &mdash; Mar 2013</p>
    <p><i>OWOX</i> &mdash; E-commerce</p>

    <h3 class="accent">Education</h3>
    <h4>Bachelor's degree</h4>
    <p>Sep 2010 &mdash; Jun 2015</p>
    <p>Dnipropetrovsk national university named after Oles Honchar. Applied mathematics faculty.</p>

    <h4>High school</h4>
    <p>Sep 2006 &mdash; Jun 2010</p>
    <p>Lyceum of information technologies. Dnipropetrovsk.</p>

    <h3 class="accent">Skills</h3>
    <p>I have quite a strong experience working with Laravel (4 and 5).</p>
    <p>I have experience working with:</p>
    <ul>
        <li>Nginx + PHP-FPM</li>
        <li>Apache</li>
        <li>Git</li>
        <li>Less (brief experience)</li>
        <li>Gulp (brief experience)</li>
    </ul>
    <p><h5 class="skill">PHP</h5> &mdash; 4 years of experience.</p>
    <p><h5 class="skill">Laravel</h5> &mdash; 3.5 years of experience.</p>
    <p><h5 class="skill">MySQL</h5> &mdash; 4 years of experience.</p>
    <p><h5 class="skill">HTML + HTML5</h5> &mdash; 4 years of experience.</p>
    <p><h5 class="skill">CSS</h5> &mdash; 4 years of experience.</p>
    <p><h5 class="skill">Javascript</h5> &mdash; 4 years of experience.</p>
    <p><h5 class="skill">jQuery</h5> &mdash; 4 years of experience.</p>
    <p><h5 class="skill">Vue.js</h5> &mdash; 1.5 years of experience.</p>
    <p><h5 class="skill">MongoDB</h5> &mdash; 1 year of experience.</p>
    <br/>
    <p><span class="skill">English language</span> &mdash; Advanced. I have passed 3 Cambridge exams: KET, PET, FCE.</p>

    <h3 class="accent">Hobbies</h3>
    <p class="text-justify">
        As a hobby I investigate PHP frameworks, try to contribute to open-source frameworks especially Laravel/Lumen, develop composer packages and different tools.
    </p>
    <p class="text-justify">
        Also I am quite interested in Python, system administration (Ansible etc.) and web analytics.
    </p>
    <p class="text-justify">
        In my city I also do extreme city games (Encounter).
    </p>

@endsection