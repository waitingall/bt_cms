<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="style.css" rel="stylesheet" type="text/css" />
	<title>Dang Trong Pho</title>
</head>
<body>



	<div class="main">
		@include('common/header')
		
		<div class="main_content">

			
			@include('common/thong')
			@include('common/thien')
			@include('common/hung')
            @include('common/pho')
			@include('common/sang')
			@include('common/hai')
            @include('common/quang')
            @include('common/manh')
			@include('common/tuananh')

		</div>
		
	</div>
@include('common/footer')


