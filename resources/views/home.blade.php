@extends('layouts.app')

@section('content')
<div class="flipbook-viewport">
	<div class="container">
		<div class="flipbook">
			<div class="page" style="background-image:url({{asset('pages/1.jpg')}})"></div>
			<div class="double" style="background-image:url({{asset('pages/2.jpg')}})"></div>
			<div class="double" style="background-image:url({{asset('pages/3.jpg')}})"></div>
			<div class="double" style="background-image:url({{asset('pages/4.jpg')}})"></div>
			<div class="double" style="background-image:url({{asset('pages/5.jpg')}})"></div>
			<div class="double" style="background-image:url({{asset('pages/6.jpg')}})"></div>
			<div class="double" style="background-image:url({{asset('pages/7.jpg')}})"></div>
            <div class="double" style="background-image:url({{asset('pages/8.jpg')}})"></div>
            <div class="double" style="background-image:url({{asset('pages/9.jpg')}})"></div>
            <div class="double" style="background-image:url({{asset('pages/10.jpg')}})"></div>
            <div class="double" style="background-image:url({{asset('pages/11.jpg')}})"></div>
            <div class="double" style="background-image:url({{asset('pages/12.jpg')}})"></div>
            <div class="double" style="background-image:url({{asset('pages/13.jpg')}})"></div>
            <div class="page" style="background-image:url({{asset('pages/14.jpg')}})"></div>
            
		</div>
	</div>
</div>

@endsection