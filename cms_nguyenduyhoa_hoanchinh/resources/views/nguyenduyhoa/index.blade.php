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
        $less->compileFile('less/12.less', 'css/12.css');
        ?>
        <link href="css/12.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
	 <div class='type-1'>
            <div style="height: 50px;"></div>
            <div class='container'>
                <div class='row1'>

                    <!--COL 1-->
                    <div class='col-md-4 col-1'>
                        <img src='images/<?php echo $newsId1['images']; ?>'>
                        <h4 class='title'><?php echo $newsId1['name']; ?></h4>
                        <p><span></span>
                           <?php echo $newsId1['description']; ?></p>
                    </div>
       
                      <!--COL 2-->
                    <div class='col-md-4 col-2' >
                  
                        <div class='col-2-top'>
                        <h4><?php echo $contents['title']; ?></h4>
                        </div>
                        <div class='col-2-bottom'>
                            <h5> <?php echo $contents['description']; ?></h5>
                            <h6><?php echo $contents['number']; ?></h6>
                            <p><a href="<?php echo $contents['url']; ?>">Đặt Bây giờ</a></p>
                         </div>
                         
                        <div class='col-2-hinh'>
							<img src="images/hoaleo.png">
						</div>
                       
                        
                    </div>
                 <!--COL 3-->
                    <div class='col-md-4 col-3'>
                       
                        <img src='images/<?php echo $newsId2['images']; ?>'>
                        <h4 class='title'><?php echo $newsId2['name']; ?></h4>
                        <p><span></span>
                           <?php echo $newsId2['description']; ?></p>
                            
                    </div>

                </div>
            </div>
        </div>
		
		
		<div class="clearfix"></div>

<!-- begin Welcome to Delicious -->
<div class='welcome-2'>

    <!-- begin mask -->
    <div class="mask">
        <div class='container'>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">

                    <!-- begin welcome -->
                    <div class="welcome">
                        <h4>Chào mừng bạn đến DuyHoa</h4>
                        <p>“Với thiết kế độc đáo theo trường phái tân cổ điển Châu Âu, DuyHoa như một tòa lâu đài lung linh giúp hiện thực hóa những ước mơ diệu kỳ trong thời khắc quan trọng nhất của đời người. Chúng tôi thắp lên xúc cảm ngọt ngào cho ngày hạnh phúc, và mang đến chất liệu tuyệt vời để viết tiếp câu chuyện tình yêu bất tận của cuộc sống lứa đôi. DuyHoa tự hào là địa điểm tổ chức tiệc cưới hoàn hảo và đẳng cấp cho cô dâu chú rể..”</p>
                        <p><a href="https://en.wikipedia.org/wiki/Tyler_Florence" target="_blank">M.R. DuyHoa</a></p>
                        <p><img src="images/sign.svg" alt="sign"></p>    
                    </div>
                    <!-- end welcome -->

                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
    <!-- end mask -->

</div>
<!-- end Welcome to Delicious -->

<div class="clearfix"></div>

<!-- begin MENU Today Specials -->
<div class='menu-2' style="
    margin: 0px;
    text-align: center;
    background: url('images/slider22.jpg') no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-color: antiquewhite;">
    <div class='container'>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">

                <!-- begin menu -->
                <div class="menu">
                    <div class="blank-space"></div>

                    <!-- begin line -->
                    <div class="line">

                        <div class="line-left">
                            <div class="text-line"></div>
                        </div>

                        <!-- begin content -->
                        <div class="content">
                            <h2>Nơi Cảm Xúc Thăng Hoa</h2>
                            <div class="today">Duy Hoa</div>
                        </div>
                        <!-- end content -->

                        <div class="line-right">
                            <div class="text-line"></div>
                        </div>
                        
                    </div>
                    <!-- end line -->

                    <div class="blank-space"></div>
                </div>
                <!-- end menu -->

            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>





<!-- end MENU Today Specials -->

<div class="clearfix"></div>


<div id="main-content">
  <section class="content-area">
    <div class="container site-content">
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
                          <div class="filter-controls"> <a class="filter active">TIỆC NGOÀI</a> <a class="filter" href="javascript:;" data-filter=".filter-gallery-1664">HỘI NGHỊ</a><a class="filter" href="javascript:;" data-filter=".filter-gallery-1661">ƯU ĐÃI</a> </div>
                        </div>
                        <div class="wrapper-gallery-filter grid row">
                        
                        <div class="row "><div class="col-md-3 col-1" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-a3a03fada3332599c8e388aba263ec15"><img src='images/chef-illustration.png'><p></p></div>
<div class="col-md-9" ><div class="row"><h2>Nơi 2 vợ chồng bạn tỏa sáng :)</h2></div>
<div class="row ">
<?php foreach($dong as $dongs) { ?>
<div class="col-md-4" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-061c782c6984861cdf2a58f82bd3cec5">

<p> <?php echo $dongs->blog_contents; ?></p></div>
 <?php } ?>
</div></div></div>
                   </div>
<div class="vamtam-blank-space  vamtam-hide-lowres" style="margin-bottom:-20px"></div>

             <div class="row">
      <div class="hinhanh">
        <div class="group-img-1">
          <div class="img1"><a href="#" ><img src="images/1.jpg" ></a> </div>
          <div class="img2"><a href="#" > <img src="images/2.jpg" ></a> </div>
          <div class="img3"><a href="#" > <img src="images/3.jpg" ></a> </div>
        </div>
        <div class="group-img-2">
          <div class="img4"><a href="#" > <img src="images/4.jpg" ></a> </div>
          <div class="img5"><a href="#" > <img src="images/5.jpg" ></a> </div>
        </div>
        <div class="group-img-3">
          <div class="img6"> <a href="#" ><img src="images/damcuoi.jpg" > </a></div>
        </div>
      </div>
    </div>           
         
         
         
         
                          
</div>
</div>
<script type='text/javascript' src="js/main.minc5bc.js"></script> 
<script type='text/javascript' src="js/custom-script.minc5bc.js"></script>	
	
	</section>
	<div class="clearfix"></div>
	

	
	<div class="clearfix"></div>
		     
		
		
<div class="type-16">
    <div id="main-content">
        <section class="content-area">
            <div class="container site-content">
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
                                                        <div class="filter-controls">
                                                            <a class="filter active">Tất cả</a>
                                                            <a class="filter" href="javascript:;" data-filter=".filter-gallery-1664">Trang Trí</a><a class="filter" href="javascript:;" data-filter=".filter-gallery-1661">Ẩm Thực</a><a class="filter" href="javascript:;" data-filter=".filter-gallery-1666">Âm Nhạc</a> </div>
                                                    </div>
                                                    <div class="wrapper-gallery-filter grid row">
                                                        <?php foreach($tuana as $tuanas) { ?>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1664">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="<?php echo $tuanas ->images ?>"><img src="<?php echo $tuanas ->images ?>" alt="Restaurant" title="Restaurant" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <?php } ?>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </article>

                    </main>
                </div>
            </div>
        </section>
    </div>
    </div>
    </div>
    <script type='text/javascript' src="js/main.minc5bc.js"></script>
    <script type='text/javascript' src="js/custom-script.minc5bc.js"></script>
	
	<div class="clearfix"></div>
	
	<div class="vamtam-grid grid-1-1  grid-1-1  first vamtam-hide-bg-lowres has-background extended no-extended-padding" style="
				background: url( 'images/waves-decoration.svg' ) repeat-x center top;
				background-size: auto;
			background-attachment: scroll;padding-bottom:200px;" id="vamtam-column-96738cfceefc27fd85b42ad18c895d21">
			</div>
    <div style="background: url( 'images/sushi-parallax.jpg' ) no-repeat ;
						background-size: cover;
						background-attachment: fixed;
						background-color:#4a4a4a;">
		<div class='container'>
			<div class="row">
                <div class="tea">
                    <div class="blank-space"></div>
                    <div class="sep">

                        <div class="sep-text-before">
                            <div class="sep-text-line"></div>
                        </div>
                        <div class="content">
                            <h2>Hạnh Phúc</h2>
                            <div class="today"> Hạnh phúc là chìa khóa dẫn tới cánh cửa thành công.</div>
                        </div>
                        <div class="sep-text-after">
                            <div class="sep-text-line"></div>
                        </div>
                    </div>
                    <div class="blank-space"></div>
                </div>
            </div>
        </div>
    </div>
</div>




   <div class='type-7'>
            <div class='container'>
                <div style="text-align: center">
                    <img src="images/sushi-icon-5.png" height="250px">
                </div>
                <div class='row'>
                    <!--COL 1-->
                    <div class='col-md-4'>
                        <div style="height: 50px"></div>
                        <h4 style="text-align: center;">Giờ mở cửa</h4>
                        <table class="opening-time-table">
                            <tbody>
								<?php foreach($listDatePho as $listDatePhos)  { ?>
                                <tr>
                                    <td><?php echo $listDatePhos->title; ?></td>
                                    <td></td>
                                    <td><?php echo $listDatePhos->times; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!--COL 2-->
                    <div class='col-md-4'>
                        <div class="directions">
                            <div style="text-align: center"> 
                                <img src="images/icon-view.png">
                            </div>
                            <h4 style="text-align: center;">DuyHoa</h4>
                            <p style="text-align: center;">Quận Thủ Đức, TP. Hồ Chí Minh
                            </p>
                            <div style="height: 5px"></div>
                            <p style="text-align: center">
                                <a href="" target="_blank" style="font-size: 13px;" class="view-button hover-accent1 ">
                                    <span class="btext" data-text="View on map">Xem trên bản đồ</span>
                                </a>
                            </p>
                        </div>
                    </div>
                    <!--COL 3-->
                    <div class='col-md-4'>
                        <div style="height: 60px"></div>
                        <a>
                            <div style="text-align: center"> 
                                <img src="images/Foursquare-logo.svg">
                            </div>
                        </a>
                        <div style="height: 5px"></div>
                        <div class="sep"></div>
                        <div style="height: 5px"></div>
                        <a>
                            <div style="text-align: center"> 
                                <img src="images/Yelp-logo.svg">
                            </div>
                        </a>
                    </div>
                </div>
                <div style="text-align: center">
                    <img src="images/hoa-cuoi-dep-nhat.jpg" height="400px">
                </div>
            </div>
        </div>
	
<div class='type-1'>
        <div class="container">	 
        	<div class="row r1">
               	   <p1></p1>        	   
                   <h3>Hoa Cưới</h3>
            </div>
        
            <div class="row r2">

                <?php foreach($thien as $thiens) { ?>

                    <div class="col-md-2 col1">
                            <img src="<?php echo $thiens->images; ?>" width="170" height="180">
                            <h1 title="Avocado Maki"><?php echo $thiens->blog_title; ?></h1>
                            <p><?php echo $thiens->blog_contents; ?></p>
                    </div>

                <?php } ?>

                
            </div>
        <div class="footer">
            
            <a href="#">
                <span class="end-footer" data-text="View the full menu">Xem thêm</span>
            </a>
        </div>
        <p2></p2>
        </div>
    </div>
    
    </body>

</html>