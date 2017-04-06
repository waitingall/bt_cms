<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type='text/javascript' src="js/jquery-2.1.1.min.js"></script>
<script type='text/javascript' src="js/bootstrap.min.js"></script>
<link rel='stylesheet' href="css/bootstrap.min.css" type='text/css' media='all' />

<?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/4.less', 'css/4.css');
        ?><link rel="stylesheet" type="text/css" href="css/4.css">
</head>
<body>
<div id="main-content">
  <section class="content-area">
    <div class="container site-content">
	<table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <td class="text-center">Id</td>
                          <td class="text-center">Name</td>
                        </tr>
                        <?php foreach($listData as $listDatas) { ?> 
                         <tr>
                          <td class="text-center"><?php echo $listDatas->test_id; ?></td>
                          <td class="text-center"><?php echo $listDatas->test_name; ?></td>
                        </tr>
                        <?php } ?>

                      </thead>



                    </table>
      <div class="row">
        <main id="main" class="site-main col-sm-12 full-width">
          <article id="post-1668" class="post-1668 page type-page status-publish hentry">
            <div class="entry-content">
              <div id="pl-1668">
                <div class="panel-grid" id="pg-1668-0">
                  <div class="panel-grid-cell" id="pgc-1668-0-0">
                    <div class="so-panel widget widget_gallery panel-first-child panel-last-child" id="panel-1668-0-0-0" data-index="0">
                      <div class="thim-widget-gallery thim-widget-gallery-base">
                        <div class="wrapper-filter-controls">
                          <div class="filter-controls"> <a class="filter active">The Story</a> <a class="filter" href="javascript:;" data-filter=".filter-gallery-1664">The Team</a><a class="filter" href="javascript:;" data-filter=".filter-gallery-1661">Awards</a> </div>
                        </div>
                        <div class="wrapper-gallery-filter grid row">
                        
                        <div class="row "><div class="col-md-3 col-1" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-a3a03fada3332599c8e388aba263ec15"><img src='images/chef-illustration.svg'><p></p></div>
<div class="col-md-9" ><div class="row"><h2>The Sushi Chef: Kiyokawa</h2></div>
<div class="row "><div class="col-md-4" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-061c782c6984861cdf2a58f82bd3cec5"><p>After nearly 20 years in the City of Angels, sushi chef Satoshi Kiyokawa has become a staple in the LA sushi scene from behind the counter at his Beverly Hills restaurant, Go By Kiyokawa. Kiyokawa draws inspiration from the simple things in life, but his food is anything but ordinary.</p></div>
<div class="col-md-4" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-e0a91ebdf5fbba4639de79222469b525"><p>Taking notes from his upbringing in Kobe, Japan, Kiyokawa’s style is deeply rooted in traditional Japanese practices. By tapping into his own creativity, he has crafted a truly one-of-a-kind experience: dishes like his “smoked” salmon nigiri and hand-carved ice bowls have earned</p></div>
<div class="col-md-4" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-51ca16e64e2ee8626f1a0e2ec1b5359a"><p>him a loyal following among Angelenos. By focusing on unique presentation and top quality fish in a city known for its sushi, Kiyokawa delivers an entertaining yet intimate sushi experience in the heart of Los Angeles.</p></div></div></div></div>
                   </div>
<div class="vamtam-blank-space  vamtam-hide-lowres" style="margin-bottom:-20px"></div>

             <div class="row">
      <div class="hinhanh">
        <div class="group-img-1">
          <div class="img1"><a href="#" ><img src="images/sushi-parallax-1.jpg" ></a> </div>
          <div class="img2"><a href="#" > <img src="images/photo-sushi-1-292x195.jpg" ></a> </div>
          <div class="img3"><a href="#" > <img src="images/photo-sushi-2-292x159.jpg" ></a> </div>
        </div>
        <div class="group-img-2">
          <div class="img4"><a href="#" > <img src="images/photo-sushi-4-292x438.jpg" ></a> </div>
          <div class="img5"><a href="#" > <img src="images/photo-sushi-5-292x195.jpg" ></a> </div>
        </div>
        <div class="group-img-3">
          <div class="img6"> <a href="#" ><img src="images/sushi-parallax-1.jpg" > </a></div>
        </div>
      </div>
    </div>           
         
         
         
         
                          
</div>
</div>
<script type='text/javascript' src="js/main.minc5bc.js"></script> 
<script type='text/javascript' src="js/custom-script.minc5bc.js"></script>
</body>
</html>