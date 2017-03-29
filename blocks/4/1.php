<!DOCTYPE html>

<html style="background-color: #f3f3f4;">
<head>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4.less', 'css/4.css');
        ?>
<link rel="stylesheet" type="text/css" href="css/4.css">
</head>

<body>
<div class='type-1'>
  <div class='container'>
  
    <div class='row'> 
    <div class="menucon">
    	<ul class="menu1">
        	<li class=""> <span class="title-text">The Story</span></a></li>
            <li class=""> <span class="title-text">The Team</span></a></li>
            <li class=""> <span class="title-text">Awards</span></a></li>
        </ul>
    </div>
      <!-- COL 1 -->
      <div class="col-md-3 col-1"> <img src='images/chef-illustration.svg'> </div>
      <!--COL 1-->
      <div class='col-md-9 col-2'>
        <div class="row">
          <div class="title1">
            <h2 class='title'>The Sushi Chef: Kiyokawa</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-2-1">
            <p>After nearly 20 years in the City of Angels, sushi chef Satoshi Kiyokawa has become a staple in the LA sushi scene from behind the counter at his Beverly Hills restaurant, Go By Kiyokawa. Kiyokawa draws inspiration from the simple things in life, but his food is anything but ordinary.</p>
          </div>
          <div class="col-md-4 col-2-1">
            <p>After nearly 20 years in the City of Angels, sushi chef Satoshi Kiyokawa has become a staple in the LA sushi scene from behind the counter at his Beverly Hills restaurant, Go By Kiyokawa. Kiyokawa draws inspiration from the simple things in life, but his food is anything but ordinary.</p>
          </div>
          <div class="col-md-4 col-2-1">
            <p>After nearly 20 years in the City of Angels, sushi chef Satoshi Kiyokawa has become a staple in the LA sushi scene from behind the counter at his Beverly Hills restaurant, Go By Kiyokawa. Kiyokawa draws inspiration from the simple things in life, but his food is anything but ordinary.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="hinhanh">
        <div class="group-img-1">
          <div class="img1"> <img src="images/sushi-parallax-1.jpg" > </div>
          <div class="img2"> <img src="images/photo-sushi-1-292x195.jpg" > </div>
          <div class="img3"> <img src="images/photo-sushi-2-292x159.jpg" > </div>
        </div>
        <div class="group-img-2">
          <div class="img4"> <img src="images/photo-sushi-4-292x438.jpg" width="292" height="438"> </div>
          <div class="img5"> <img src="images/photo-sushi-5-292x195.jpg" width="292" height="195"> </div>
        </div>
        <div class="group-img-3">
          <div class="img6"> <img src="images/sushi-parallax-1.jpg" > </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>