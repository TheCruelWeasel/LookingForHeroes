@extends('welcome')
@section('title')
	Accueil
@stop
@section('home')
	<div class="sub-header">
		<div class="save-the-world">LET’S SAVE THE WORLD TOGETHER</div>

		<div class="btn-wrap">

			<div class="btn-hollow btn-border-primary-color find-a-team-btn">
				<div class="btn-shape btn-primary-color">
					<a href="/s/team" class="btn-link"><span class="btn-content btn-content-primary">FIND A TEAM</span></a>
				</div>
			</div>

			<div class="or">
				<span class="dash"></span>
				<span class="or-txt">or</span>
				<span class="dash"></span>
			</div>

			<div class="btn-hollow btn-border-secondary-color">
				<div class="btn-shape btn-secondary-color find-players-btn">
					<a href="/s/player" class="btn-link"><span class="btn-content btn-content-secondary">FIND PLAYERS</span></a>
				</div>
			</div>
		</div>
	</div>

	<div class="sec1">
		<h2>WHY DO I NEED OVERWATCH BUDDY FINDER ?</h2>
		<ul>
			<li>
				<div class="elem-title">
					<h3>TOGETHER IS BETTER</h3>
				</div>
				<div class="elem-icon">
					<img src="{{ URL::asset('assets/img/icon-sec1-1.png') }}" />
				</div>
				<div class="elem-txt">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget euis mod neque.</p>
				</div>
			</li>
			<li>
				<div class="elem-title">
					<h3>TO VICTORY</h3>
				</div>
				<div class="elem-icon">
					<img src="{{ URL::asset('assets/img/icon-sec1-2.png') }}" />
				</div>
				<div class="elem-txt">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget euis mod neque.</p>
				</div>
			</li>
			<li class="last">
				<div class="elem-title">
					<h3>YOUR TEAM, YOUR RULES</h3>
				</div>
				<div class="elem-icon">
					<img src="{{ URL::asset('assets/img/icon-sec1-3.png') }}" />
				</div>
				<div class="elem-txt">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget euis mod neque.</p>
				</div>
			</li>
		</ul>
	</div>

	<div class="sec2">
		<div class="txt">
			<ul>
				<li class="first-elem">
					<span class="stat yellow">739</span>
					<span class="stat-side-txt">team registered</span>
				</li>

				<li class="second-elem">
					<span class="stat blue">2561</span>
					<span class="stat-side-txt">players registered</span>
				</li>

				<li class="third-elem">
					<span class="stat red">6428</span>
					<span class="stat-side-txt">matches played</span>
				</li>

				<li class="fourth-elem">
					<div class="btn-hollow btn-border-secondary-color">
						<div class="btn-shape btn-secondary-color create-account-btn">
							<a href="/register" class="btn-link"><span class="btn-content btn-content-secondary">CREATE MY ACCOUNT</span></a>
						</div>
					</div>
				</li>
			</ul>
		</div>

		<div class="tracer"></div>
	</div>

	<div class="sec3">
		<div class="save-the-world">READY TO ENGAGE ?</div>

		<div class="btn-wrap">
			<div class="btn-hollow btn-border-primary-color find-a-team-btn">
				<div class="btn-shape btn-primary-color">
					<a href="/s/team" class="btn-link"><span class="btn-content btn-content-primary">FIND A TEAM</span></a>
				</div>
			</div>

			<div class="or">
				<span class="dash"></span>
				<span class="or-txt">or</span>
				<span class="dash"></span>
			</div>

			<div class="btn-hollow btn-border-secondary-color">
				<div class="btn-shape btn-secondary-color find-players-btn">
					<a href="/s/player" class="btn-link"><span class="btn-content btn-content-secondary">FIND PLAYERS</span></a>
				</div>
			</div>
		</div>
	</div>
@stop
