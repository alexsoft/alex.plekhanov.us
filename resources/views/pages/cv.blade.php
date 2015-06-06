@extends('_layouts.default')

@section('page_title', 'CV - Alex.Plekhanov.us')

@section('content')

	<h1 class="accent">Alexey Plekhanov</h1>
	<h2>PHP Developer</h2>

	<div class="row">
		<div class="col-sm-6">
			<p>Birthday: 22 December 1993</p>
			<p data-toggle="tooltip" data-placement="bottom" title="July 2015 - Poland, Wroclaw">
				Location: Ukraine, Dnipropetrovsk <span class="flag-icon flag-icon-ua"></span>
			</p>
			<p>Email: {!! Html::mailto('oleksii.plekhanov@gmail.com') !!}</p>
		</div>
		<div class="col-sm-3">
			<p>
				<span class="fa-stack fa-lg">
					<i class="fa fa-square-o fa-stack-2x"></i>
					<i class="fa fa-github-alt fa-stack-1x"></i>
				</span> <a href="http://github.com/alexsoft">alexsoft</a>
			</p>
			<p>
				<span class="fa-stack fa-lg">
					<i class="fa fa-square-o fa-stack-2x"></i>
					<i class="fa fa-skype fa-stack-1x"></i>
				</span> asoftix
			</p>
		</div>
	</div>

	<h3 class="accent">Experience</h3>

	<h4>PHP Developer</h4>
	<p>June 2015 &mdash; Present</p>
	<p><span class="company">908.vc</span> &mdash; Product Development</p>

	<h4>PHP Developer</h4>
	<p>Oct 2013 &mdash; May 2015</p>
	<p><span class="company">DataArt</span> &mdash; Software Development Company</p>

	<h4>PHP Developer</h4>
	<p>Apr 2013 &mdash; May 2013</p>
	<p><span class="company">FORFORCE</span> &mdash; Digital production</p>

	<h4>PHP Developer</h4>
	<p>Oct 2012 &mdash; Mar 2013</p>
	<p><span class="company">OWOX</span> &mdash; E-commerce</p>

	<h3 class="accent">Education</h3>
	<h4>Bachelor's degree</h4>
	<p>Sep 2010 &mdash; Jun 2015</p>
	<p>Dnipropetrovsk national university named after Oles Honchar. Applied mathematics faculty.</p>

	<h4>High school</h4>
	<p>Sep 2006 &mdash; Jun 2010</p>
	<p>Lyceum of information technologies. Dnipropetrovsk.</p>

	<h3 class="accent">Skills</h3>
	<p>I have quite a strong experience working with Laravel (4 and 5) and Yii 1.</p>
	<p>Can work on Windows and Linux (mostly Ubuntu).</p>
	<p>I have experience working with:</p>
	<ul>
		<li>PhpStorm</li>
		<li>Sublime Text</li>
		<li>Redmine</li>
		<li>Nginx + PHP-FPM</li>
		<li>Apache</li>
		<li>Git</li>
		<li>Less (brief experience)</li>
		<li>Gulp (brief experience)</li>
	</ul>
	<p><span class="skill">PHP</span> &mdash; 2.5 years of experience.</p>
	<p><span class="skill">Yii 1</span> &mdash; 1 year of experience.</p>
	<p><span class="skill">Laravel 4/5</span> &mdash; 2 years of experience.</p>
	<p><span class="skill">OOP</span> &mdash; 2.5 years of experience.</p>
	<p><span class="skill">MySQL</span> &mdash; 2.5 years of experience.</p>
	<p><span class="skill">HTML + HTML5</span> &mdash; 5 years of experience.</p>
	<p><span class="skill">CSS</span> &mdash; 3 years of experience.</p>
	<p><span class="skill">Javascript</span> &mdash; 2.5 years of experience.</p>
	<p><span class="skill">jQuery</span> &mdash; 2.5 years of experience.</p>
	<p><span class="skill">MooTools</span> &mdash; 1 year of experience.</p>
	<p><span class="skill">MongoDB</span> &mdash; 1 year of experience.</p>
	<p><span class="skill">Git</span> &mdash; 2 years of experience.</p>
	<br/>
	<p><span class="skill">English language</span> &mdash; Advanced. I have passed 3 Cambridge exams: KET, PET, FCE.</p>

	<h3 class="accent">Hobbies</h3>
	<p class="text-justify">
		As a hobby I investigate PHP frameworks, try to contribute to open-source frameworks like Laravel/Lumen, write composer packages and different tools.
	</p>
	<p class="text-justify">
		Also I am quite interested in Python, system administration and web analytics.
	</p>
	<p class="text-justify">
		In my city I also do extreme city games (Encounter).
	</p>



@endsection