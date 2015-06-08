@extends('_layouts.default')

@section('content')

	<br>

	<img src="{{ asset('img/alexey.jpg') }}" alt="Alexey Plekhanov" class="avatar-home">
	<p>
		Hey, I'm <strong class="accent">Alexey Plekhanov</strong>, PHP Developer at&nbsp;<a href="http://908.vc">908.vc</a>.
	</p>
	<p>
		I'm PHP and <a href="http://laravel.com">Laravel</a> evangelist too :)
	</p>

	<div class="hide">
		<br style="clear: both;">
		<h2>Recent Posts</h2>
		<ul class="post-list">
			<li>
				2015-05-31 Blog v.2
			</li>
			<li class="post-list__post">
				<span class="post-list__date">&nbsp;</span>
				<a href="/blog/" class="post-list__link" style="font-weight: bold;">More blog posts..</a></li>
		</ul>
	</div>


@endsection