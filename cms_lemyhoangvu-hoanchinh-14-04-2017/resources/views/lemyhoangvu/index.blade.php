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
        $less->compileFile('less/1.less', 'css/1.css');
        ?>
        <link href="css/1.css" rel="stylesheet" type="text/css" />

    </head>

    <body> 
	
	
<!-- type-1 -->
	
        <div class='type-1'>
            <div style="height: 50px;"></div>
            <div class='container'>
                <div class='row'>

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
                            <p><a href="<?php echo $contents['url']; ?>">LIÊN HỆ</a></p>
                         </div>
                         
                        <div class='col-2-hinh'></div>
                       
                        
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
		<!-- END type-1 -->
		<div class="clearfix"></div>
				<!--  type-7 -->
		
		  <div class='type-10'>
            <div class='container'>
                <div class='row'>
                    <!--COL 1-->
                    <div class='col-md-6'>
                        <div class='row'>
                            <!--COL 1-->
                            <div class='col-md-5 col-1'>
                                <img src="./images/hinhcuoi2.jpg" width="100%">
                            </div>
                            <!--COL 2-->
                            <div class='col-md-7 col-2'>
							<div style="text-align: center; padding-top: 15px">
							<img src="./images/<?php echo $newsId4['images']; ?>">
							</div>
                                <h3 style="text-align: center;"><?php echo $newsId4['name']; ?></h3>
                                <h5 class="today-specials" style="text-align: center;">Uy Tín</h5>
                                <div class="today-specials-menu">
                                   
                                    <div class="today-specials-description"><?php echo $newsId4['description']; ?>
                                    </div>
                                </div>
                               
                                
                            </div>
                        </div>
                    </div>
                    <!--COL 2-->
                    <div class='col-md-6'>
                        <div class='row'>
                            <!--COL 3-->
                            <div class='col-md-7 col-3'>
							<div style="text-align: center; padding-top: 15px">
							<img src="./images/<?php echo $newsId5['images']; ?>">
							</div>
                                <h3 style="text-align: center;"><?php echo $newsId5['name']; ?></h3>
                                <h5 class="today-specials" style="text-align: center;">Chất Lượng</h5>
                                <p style="text-align: center;"> <?php echo $newsId5['description']; ?></p>
                                <h4 style="text-align: center;"><?php echo $newsId6['description']; ?></h4>
                                <h6 style="text-align: center;"><?php echo $newsId6['name']; ?></h6>
                                <p style="text-align: center;">
                                    <a href="#" target="_self" style="font-size: 14px;" class="book-table-button accent1  button-border hover-accent1 ">
                                        <span class="book-table-text" data-text="Book a table!" style="color:#000000">LIÊN HỆ</span>
                                    </a>
                                </p>
                                <span class="blank-space " style="height:40px"></span>
                            </div>
                            <!--COL 4-->
                            <div class='col-md-5 col-4'>
                                <img src="./images/hinhcuoi1.jpg" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<!-- END type-7 -->
		
		
		<div class="clearfix"></div>
		<!--  type-2 -->

<div class='welcome-2'>

    <!-- begin mask -->
    <div class="mask">
        <div class='container'>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">

                    <!-- begin welcome -->
                    <div class="welcome">
                        <h4><?php echo $newsId3['name']; ?></h4>
                        <p>“<?php echo $newsId3['description']; ?>”</p>
                        <p><a href="https://en.wikipedia.org/wiki/Tyler_Florence" target="_blank">Liên Hệ</a></p>
                        <p><img src="images/images.png" alt="sign"></p>    
                    </div>
                    <!-- end welcome -->

                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
    <!-- end mask -->

</div>


<div class="clearfix"></div>

<div class='menu-2'>
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
                            <h2><?php echo $newsId7['name']; ?></h2>
                            <div class="today"><?php echo $newsId7['description']; ?></div>
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
<!-- END type-3 -->

<div class="clearfix"></div>

<!-- type-4 -->
 <div class='type-2'>
        <div class="container">	 
        	<div class="row r1">
               	   <p1></p1>        	   
                   <p3><img src="images/wedding-top.png" width="100" height="100"></p3>
            </div>
        
            <div class="row r2">
                <div class="col-md-2 col1">
                        <img src="images/1.png" width="170" height="180">
                        <h1 title="Avocado Maki"><?php echo $newsId8['name']; ?></h1>
                        <p><?php echo $newsId8['description']; ?>
</p>
                </div>

                <div class="col-md-2 col2">
                        <img src="images/02.png" width="170" height="180">
                        <h1 title="Spicy Tuna Roll"><?php echo $newsId9['name']; ?></h1>
                        <p><?php echo $newsId9['description']; ?>
</p>
                </div>

                <div class="col-md-2 col3">
                        <img src="images/3.png" width="170" height="180">
                        <h1 title="Salmon Dragon Roll"><?php echo $newsId10['name']; ?></h1>
                        <p><?php echo $newsId10['description']; ?>
</p>
                </div>

                <div class="col-md-2 col4">
                        <img src="images/4.png" width="170" height="180">
                        <h1 title="Smoked Salmon and Caviar Sushi"><?php echo $newsId11['name']; ?></h1>
                        <p> <?php echo $newsId11['description']; ?></p>
                </div>

                <div class="col-md-2 col5">
                        <img src="images/5.png" width="170" height="180">
                        <h1 title="Vegetarian Futomaki"><?php echo $newsId12['name']; ?></h1>
                        <p><?php echo $newsId12['description']; ?>
</p>
                </div>

                <div class="col-md-2 col6">
                        <img src="images/6.png" width="170" height="180">
                        <h1 title="Cucumber Maki"><?php echo $newsId13['name']; ?></h1>
                        <p><?php echo $newsId13['description']; ?>
</p>
                </div>
            </div>
		
        <div class="footer">
            
            <a href="#">
                <span class="end-footer" data-text="View the full menu"><?php echo $newsId14['name']; ?></span>
            </a>
        </div>
        <p2></p2>
        </div>
    </div>
	
	<!-- END type-4 -->
		<div class="clearfix"></div>
		<!--  type-10 -->	
		
		 <div id="main-content">
        <section class="content-area">
            <div class="container site-content">
            <div class="row">
                   
            </div>
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
                                                            <a class="filter active">Nhà Hàng Q1</a>
                                                            <a class="filter" href="javascript:;" data-filter=".filter-gallery-1664">Nhà Hàng Q2</a><a class="filter" href="javascript:;" data-filter=".filter-gallery-1661">Nhà Hàng Q3</a><a class="filter" href="javascript:;" data-filter=".filter-gallery-1666">Xem Thêm</a> </div>
                                                    </div>
                                                    <div class="wrapper-gallery-filter grid row">
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1664">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/16/01.jpg"><img src="images/16/01.jpg" alt="Restaurant" title="Restaurant" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1664">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/16/02.jpg"><img src="images/16/02.jpg" alt="Restaurant" title="Restaurant" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1661">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/16/03.jpg"><img src="images/16/03.jpg" alt="Other" title="Other" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1661">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/16/04.jpg"><img src="images/16/04.jpg" alt="Other" title="Other" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1666">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/16/05.jpg"><img src="images/16/05.jpg" alt="Rooms" title="Rooms" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1666">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/16/06.jpg"><img src="images/16/06.jpg" alt="Rooms" title="Rooms" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1666">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/16/07.jpg"><img src="images/16/07.jpg" alt="Rooms" title="Rooms" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1666">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/16/08.jpg"><img src="images/16/08.jpg" alt="Rooms" title="Rooms" />
                                                                </a>
                                                            </div>
                                                        </div>
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
<!-- END type-10 -->
	
	<div class="clearfix"></div>	
					<!--  type-8 -->
		
		<div class="type_12" style="
				background: url( 'images/chup-anh-cuoi-o-dau-dep-tai-ha-noi-1344.jpg' ) no-repeat ;
				background-size: cover;
			background-attachment: fixed;background-color:#4a4a4a;padding-top:80px;padding-bottom:80px;" id="vamtam-column-4a72034ab579d3ccada7e77c3dc801cf"><div class=""><div class=""><style>#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf,#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf p,#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf em,#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf h1,#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf h2,#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf h3,#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf h4,#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf h5,#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf h6,#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf h1 a:not(:hover),#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf h2 a:not(:hover),#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf h3 a:not(:hover),#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf h4 a:not(:hover),#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf h5 a:not(:hover),#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf h6 a:not(:hover),#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf .column-title,#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf .sep-text h2.regular-title-wrapper,#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf .text-divider-double,#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf .sep-text .sep-text-line,#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf .sep,#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf .sep-2,#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf .sep-3,#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf .portfolio-filters .inner-wrapper .cbp-filter-item,#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf .portfolio-filters .inner-wrapper .cbp-filter-item:hover,#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf .portfolio-filters .inner-wrapper .cbp-filter-item.cbp-filter-item-active,#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf td,#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf th,#vamtam-column-4a72034ab579d3ccada7e77c3dc801cf caption{color:#fff;}</style><div class="" style="height:130px"></div>
				<div class="row ">
					<div class="" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-7fe016dfa634ef0860cbc9ebc58ecfa2"> 
						<div class="sep-text single centered">
							<div class="sep-text-before">
								<div class="sep-text-line"></div>
							</div>
							<div class="content">
								<h2 class="text-divider-double">
									
								</h2>
								<div class="text-divider-subtitle">
								
								</div> 
							</div>
							<div class="sep-text-after">
								<div class="sep-text-line">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="vamtam-blank-space " style="height:130px"></div></div></div></div>
				
			<!-- END type-8 -->	

	
		
	
    </body>

</html>