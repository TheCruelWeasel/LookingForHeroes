@extends('layout.master')

@section('content')
	<div class="central-wrap">
		@yield('home')
		@yield('auth')
		@yield('search')
	</div>
@stop
