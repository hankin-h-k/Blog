<!DOCTYPE html>
<html>
<head>
	<title>{{ $post->title }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
	<h1>{{ $post->title }}</h1>
	<h5>{{ $post->published_at }}</h5>
	<hr>
	{!! nl2br($post->content) !!}
	<br>
	<button class="btn btn-primary" onclick="history.back()">
		《 back
	</button>
</div>
</body>
</html>