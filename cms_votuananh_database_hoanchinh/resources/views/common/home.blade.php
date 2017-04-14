<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="style.css" rel="stylesheet" type="text/css" />
	<title>My First Page in Laravel</title>
</head>
<body>



	<div class="main">
		@include('common/header')
		
		<div class="main_content">

			
			@include('common/thong')
			@include('common/pho')
			@include('common/thien')
			@include('common/quang')
			@include('common/manh')
			@include('common/hung')
			@include('common/tuananh')
			@include('common/sang')
			@include('common/hai')

			

		</div>
		
	</div>
@include('common/footer')


