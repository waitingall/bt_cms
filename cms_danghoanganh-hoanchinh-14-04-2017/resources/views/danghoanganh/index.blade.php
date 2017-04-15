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
        $less->compileFile('less/2.less', 'css/2.css');
        ?>
        <link href="css/2.css" rel="stylesheet" type="text/css" />
		
		
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<style type="text/css" media="screen">
        .carousel-inner > .item > img, .carousel-inner > .item > a > img {
            width: 70%;
            margin: auto;
            font: normal 24px/32px Libre Baskerville;
        }
    </style>

    </head>

    <body> 
	
<!-- begin navbar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Délicious</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Trang chủ <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Dịch vụ cưới</a></li>
        <li><a href="#">Ý tưởng cưới</a></li>
        <li><a href="#">Lên kế hoạch</a></li>
        <li><a href="#">Chuẩn bị cưới</a></li>
        <li><a href="#">Kinh nghiệm cưới</a></li>
        <li><a href="#">Bộ sưu tập</a></li>
        <li><a href="#">Tin tức</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- end navbar -->

<div class="clearfix"></div>

<!-- begin Sushi bar -->
<div class='sushi-2'>
    <div class='container'>
            <div class="row">
                <div class="col-md-12">
                    <div class="title">
                        <h2><?php echo $testId1['name']; ?></h2>
                        <p><?php echo $testId1['description']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Sushi bar -->

<div class="clearfix"></div>

<!-- begin 2 -->

<!-- begin Welcome to Délicious -->
<div class='welcome-2'>

    <!-- begin mask -->
    <div class="mask">
        <div class='container'>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">

                    <!-- begin welcome -->
                    <div class="welcome">
                        <h4><?php echo $testId2['name']; ?></h4>
                        <p><?php echo $testId2['description']; ?></p>
                        <p><a href="https://en.wikipedia.org/wiki/Tyler_Florence" target="_blank">M.R. Tyler Florence</a></p>
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
<!-- end Welcome to Délicious -->

<div class="clearfix"></div>

<!-- begin MENU Today Specials -->
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
                            <h2><?php echo $testId3['name']; ?></h2>
                            <div class="today"><?php echo $testId3['description']; ?></div>
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

<!-- end 2 -->

<div class="clearfix"></div>




<!-- begin 3 -->

<div class='type-3'>
        <div class="container">
            <div class="row r1">
                   <p1></p1>               
                   <p3><img src="images/sushi-icon-3.svg" width="100" height="100"></p3>
            </div>
        
            <div class="row r2">
                <div class="col-md-2 col1">
                        <img src="images/img-1240-2-edited.jpg" width="170" height="180">
                        <h1 title="Avocado Maki"><?php echo $testId4['name']; ?></h1>
                        <p><?php echo $testId4['description']; ?></p>
                </div>

                <div class="col-md-2 col2">
                        <img src="images/ms-03-03.jpg" width="170" height="180">
                        <h1 title="Spicy Tuna Roll"><?php echo $testId5['name']; ?></h1>
                        <p><?php echo $testId5['description']; ?></p>
                </div>

                <div class="col-md-2 col3">
                        <img src="images/01-1.jpg" width="170" height="180">
                        <h1 title="Salmon Dragon Roll"><?php echo $testId6['name']; ?></h1>
                        <p><?php echo $testId6['description']; ?></p>
                </div>

                <div class="col-md-2 col4">
                        <img src="images/pullman-ballroom-5-s.jpg" width="170" height="180">
                        <h1 title="Smoked Salmon and Caviar Sushi"><?php echo $testId7['name']; ?></h1>
                        <p><?php echo $testId7['description']; ?></p>
                </div>

                <div class="col-md-2 col5">
                        <img src="images/trung-tam-tiec-cuoi-hoi-nghi-melisa-center-3.jpg" width="170" height="180">
                        <h1 title="Vegetarian Futomaki"><?php echo $testId8['name']; ?></h1>
                        <p><?php echo $testId8['description']; ?></p>
                </div>

                <div class="col-md-2 col6">
                        <img src="images/trung-tam-tiec-cuoi-hoi-nghi-melisa-center-2.jpg" width="170" height="180">
                        <h1 title="Cucumber Maki"> <?php echo $testId9['name']; ?></h1>
                        <p><?php echo $testId9['description']; ?></p>
                </div>
            </div>
        <div class="footer">
            <a href="#">
                <span class="end-footer" data-text="View the full menu">Xem đầy đủ hơn</span>
            </a>
        </div>
        <p2></p2>
        </div>
    </div>

<!-- end 3 -->

<div class="clearfix"></div>

<!-- begin 7 -->

<div class='type-7'>
            <div class='container'>
                <div style="text-align: center; margin-top: 60px;">
                    <img src="images/sushi-icon-5.svg" height="250px">
                </div>
                <div class='row'>
                    <!--COL 1-->
                    <div class='col-md-4'>
                        <div style="height: 50px"></div>
                        <h4 style="text-align: center;">Giờ mở cửa</h4>
                        <table class="opening-time-table">
                            <tbody>
                                <tr>
                                    <td>Hàng ngày</td>
                                    <td></td>
                                    <td>9.00 – 18:00</td>
                                </tr>
                                <tr>
                                    <td>Thứ 7</td>
                                    <td></td>
                                    <td>10.00 – 17:00</td>
                                </tr>
                                <tr>
                                    <td>Chủ nhật</td>
                                    <td></td>
                                    <td>9.00 - 18.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!--COL 2-->
                    <div class='col-md-4'>
                        <div class="directions">
                            <div style="text-align: center"> 
                                <img src="images/icon-view.png">
                            </div>
                            <h4 style="text-align: center;">Điều hướng</h4>
                            <p style="text-align: center;">
                                Tp. Hồ Chí Minh, Việt Nam
                                <br>
                                10, Nguyễn Huệ, Bến Thành
                            </p>
                            <div style="height: 5px"></div>
                            <p style="text-align: center">
                                <a href="#" target="_self" style="font-size: 13px;" class="view-button hover-accent1 ">
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
                    <img src="images/sushi-icon-4.svg" width="250px" height="250px">
                </div>
            </div>
        </div>

<!-- end 7 -->

<div class="clearfix"></div>

<!-- begin 10 -->

<div class='type-10'>
            <div class='container'>
                <div class='row'>
                    <!--COL 1-->
                    <div class='col-md-6'>
                        <div class='row'>
                            <!--COL 1-->
                            <div class='col-md-5 col-1'>
                                <img src="./images/coffee-photo-1.jpg" width="100%">
                            </div>
                            <!--COL 2-->
                            <div class='col-md-7 col-2'>
                                <h3 style="text-align: center;">Make Up</h3>
                                <h5 class="today-specials" style="text-align: center;">Trang điểm cô dâu</h5>
                                <div class="today-specials-menu">
                                    <h3 class="" title="Cashew Chicken With Stir-Fry Vegetables &amp; Green Salad">Ja Make up Artist
                                        <span class="today-specials-price">1,800,000 VND</span>
                                    </h3> 
                                    <div class="today-specials-description">Với nhiều năm kinh ngiệm trong lĩnh vực làm đẹp, trang điểm cho cô dâu, nay Emmal Studio đi vào hoạt động độc lập để có thể phục vụ khách hàng của mình được hài lòng nhất.
                                    </div>
                                </div>
                                <div class="today-specials-menu">
                                    <h3 class="" title="Optic Big Breakfast Combo Menu">Jolie Beauty Talks
                                        <span class="today-specials-price">1,800,000 VND</span>
                                    </h3>
                                    <div class="today-specials-description">
                                    Với nhiều năm kinh ngiệm trong lĩnh vực làm đẹp, trang điểm cho cô dâu, nay Emmal Studio đi vào hoạt động độc lập để có thể phục vụ khách hàng của mình được hài lòng nhất.
                                    </div>
                                </div>
                                <div class="today-specials-menu">
                                    <h3 class="" title="Coffee and Pain au chocolat (Chocolate croissant) Combo Menu">Emmal Studio
                                        <span class="today-specials-price">1,800,000 VND</span>
                                    </h3>
                                    <div class="today-specials-description">Với nhiều năm kinh ngiệm trong lĩnh vực làm đẹp, trang điểm cho cô dâu, nay Emmal Studio đi vào hoạt động độc lập để có thể phục vụ khách hàng của mình được hài lòng nhất.
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
                                <h3 style="text-align: center;">Phúc giây hạnh phúc</h3>
                                <h5 class="today-specials" style="text-align: center; padding-bottom: 25px;">Bắt đầu lúc 3pm</h5>
                                <p style="text-align: center;">Emmal Studio có các nhiếp ảnh gia và đội ngũ makeu, stylist phù hợp để tư vấn cho các bạn được tốt nhất. Chúng tôi sẽ luôn cố gắng để có thể mang đến cho bạn những sản phẩm và dịch vụ độc đáo nhất, để ngày cưới của bạn trở nên hoàn hảo hơn, đáng nhớ hơn.</p>
                                <h4 style="text-align: center;"> 091 383 5858</h4>
                                <h6 style="text-align: center;">Hãy gọi cho chúng tôi !</h6>
                                <p style="text-align: center;">
                                    <a href="#" target="_self" style="font-size: 14px;" class="book-table-button accent1  button-border hover-accent1 ">
                                        <span class="book-table-text" data-text="Đặt hẹn trước !" style="color:#000000">Đặt hẹn trước !</span>
                                    </a>
                                </p>
                                <span class="blank-space " style="height:40px"></span>
                            </div>
                            <!--COL 4-->
                            <div class='col-md-5 col-4'>
                                <img src="./images/coffee-photo-2.jpg" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- end 10 -->

<div class="clearfix"></div>

<!-- begin 11 -->

<div class='type-11'>
            <div class='container'>
                <div class="sep-text">
                    <div class="sep-text-before"><div class="sep-text-line"></div></div>
                    <div class="content">
                        <h2 class="text-divider-double">
                            Trang phục cưới
                        </h2>
                        <div class="text-divider-subtitle">Khuyến mãi, dịch vụ cưới</div>
                    </div>
                    <div class="sep-text-after"><div class="sep-text-line"></div></div>
                </div>
                <div style="text-align: center">
                    <div class='row'>
                        <!--COL 1-->
                        <div class='col-md-2-5'>
                            <div class="thumbnail">
                                <a href="/" title="Coffee &amp; Tea" class="has-border">
                                    <img width="300" height="300" src="images/13086776_503065833224087_4747658167173011038_o-447x335.jpg" alt=""> </a>
                            </div>
                            <h4 class="services-title">
                                <a href="/" title="Coffee &amp; Tea">Veneto Shop</a>
                            </h4>
                            <div class="services-content">
                                <p>Veneto tự hào là một trong những thương hiệu thời trang hàng đầu chuyên cung cấp các sản phẩm thời trang nam thiết kế.</p>
                            </div>
                        </div>
                        <div class='col-md-2-5'>
                            <div class="thumbnail">
                                <a href="/" title="Coffee &amp; Tea" class="has-border">
                                    <img width="300" height="300" src="images/14917276_315915132124308_3992076648447997582_o_447x335.jpg" alt=""> </a>
                            </div>
                            <h4 class="services-title">
                                <a href="/" title="Coffee &amp; Tea">Victory Wedding</a>
                            </h4>
                            <div class="services-content">
                                <p>Một ngày nào đó trên thế giới rộng lớn này chúng ta sẽ gặp được một người thuộc về riêng mình, một người bạn, một nửa tâm hồn, người mà chúng ta có thể kể cho họ nghe về những giấc mơ của mình.</p>
                            </div>
                        </div>
                        <div class='col-md-2-5'>
                            <div class="thumbnail">
                                <a href="/" title="Coffee &amp; Tea" class="has-border">
                                    <img width="300" height="300" src="images/15384498_334211966961291_439068523388644416_o-447x335.jpg" alt=""> </a>
                            </div>
                            <h4 class="services-title">
                                <a href="/" title="Coffee &amp; Tea">Nicole Bridal</a>
                            </h4>
                            <div class="services-content">
                                <p>Veneto tự hào là một trong những thương hiệu thời trang hàng đầu chuyên cung cấp các sản phẩm thời trang nam thiết kế.</p>
                            </div>
                        </div>
                        <div class='col-md-2-5'>
                            <div class="thumbnail">
                                <a href="/" title="Coffee &amp; Tea" class="has-border">
                                    <img width="300" height="300" src="images/15419759_334211973627957_7004166950451794599_o_447x335.jpg" alt=""> </a>
                            </div>
                            <h4 class="services-title">
                                <a href="/" title="Coffee &amp; Tea">Áo cưới Milan</a>
                            </h4>
                            <div class="services-content">
                                <p>Một ngày nào đó trên thế giới rộng lớn này chúng ta sẽ gặp được một người thuộc về riêng mình, một người bạn, một nửa tâm hồn, người mà chúng ta có thể kể cho họ nghe về những giấc mơ của mình.</p>
                            </div>
                        </div>
                        <div class='col-md-2-5'>
                            <div class="thumbnail">
                                <a href="/" title="Coffee &amp; Tea" class="has-border">
                                    <img width="300" height="300" src="images/15577948_335829023466252_7024125442824752823_o_447x335.jpg" alt=""> </a>
                            </div>
                            <h4 class="services-title">
                                <a href="/" title="Coffee &amp; Tea">Bella Bridal Viet Nam</a>
                            </h4>
                            <div class="services-content">
                                <p>Veneto tự hào là một trong những thương hiệu thời trang hàng đầu chuyên cung cấp các sản phẩm thời trang nam thiết kế.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<!-- end 11 -->

<div class="clearfix"></div>

<!-- begin 5 -->

<div class='type-5'>
        <div class='container'>
            <div class='row'>
                <!--COL 1-->
                <div class="limit-wrapper">
                    <div class="row ">
                        <div>
                            <div class="row ">
                                <div class="grid-1-1">
                                    <p><img src="https://vip-restaurant.vamtam.com/wp-content/uploads/2016/07/sushi-icon-4.svg" alt="sushi-icon-4">
                                    </p>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="owlCarousel">
                                    <div class="vamtam-cubeportfolio ">
                                        <div class="cbp-item-wrapper">
                                            <blockquote class="clearfix">
                                                <div class="quote-text">
                                                    <h4 class="quote-summary">"Life tastes better with Délicious"</h4>
                                                    <div class="quote-title-wrapper clearfix">
                                                        <div class="quote-title"><span class="icon shortcode   use-hover"></span><span class="icon shortcode   use-hover"></span><span class="icon shortcode   use-hover"></span><span class="icon shortcode   use-hover" ></span><span class="icon shortcode   use-hover"></span>  <span class="the-title">MALCOLM GLADWELL</span>
                                                        </div>
                                                    </div>
                                                    <div class="quote-content"><p>Trong tất cả mọi nơi tôi đã viếng thăm trên thế giới, tôi đã tìm thấy Haddon là đẹp nhất và thú vị. Những con sò ngon trong nhà hàng của Haddon là thứ tốt nhất mà tôi có ở bất cứ đâu. Các căn cứ rất huyền diệu Tôi có thể tưởng tượng được những ngày khi tổ tiên của tôi vượt qua chúng, áo giáp và kiếm điên cuồng và ngựa ở khắp mọi nơi, khi họ cưỡi lên để đánh nhau bất cứ nơi nào cần thiết. Haddon đã đưa ra một cái nhìn tràn ngập về quá khứ trong khi vẫn giữ được nét quyến rũ của nó. Cảm ơn bạn đã có một niềm vui như vậy!</p></div>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="cbp-item">
                                        <div class="cbp-item-wrapper">
                                            <blockquote class="clearfix">
                                                <div class="quote-text">
                                                    <h4 class="quote-summary">"Create with the heart; cook with love."</h4>
                                                    <div class="quote-title-wrapper clearfix">
                                                        <div class="quote-title"><span class="icon shortcode   use-hover"></span><span class="icon shortcode   use-hover"></span><span class="icon shortcode   use-hover"></span><span class="icon shortcode   use-hover" ></span><span class="icon shortcode   use-hover"></span>  <span class="the-title">M.F. MOONZAJER</span>
                                                        </div>
                                                    </div>
                                                    <div class="quote-content"><p>Trong tất cả mọi nơi tôi đã viếng thăm trên thế giới, tôi đã tìm thấy Haddon là đẹp nhất và thú vị. Những con sò ngon trong nhà hàng của Haddon là thứ tốt nhất mà tôi có ở bất cứ đâu. Các căn cứ rất huyền diệu Tôi có thể tưởng tượng được những ngày khi tổ tiên của tôi vượt qua chúng, áo giáp và kiếm điên cuồng và ngựa ở khắp mọi nơi, khi họ cưỡi lên để đánh nhau bất cứ nơi nào cần thiết. Haddon đã đưa ra một cái nhìn tràn ngập về quá khứ trong khi vẫn giữ được nét quyến rũ của nó. Cảm ơn bạn đã có một niềm vui như vậy!</p></div>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="cbp-item" style="width: 1260px; left: 2520px; top: 0px;">
                                        <div class="cbp-item-wrapper">
                                            <blockquote class="clearfix">
                                                <div class="quote-text">
                                                    <h4 class="quote-summary">“Good painting is like good cooking - it can be tasted, but not explained.”</h4>
                                                    <div class="quote-title-wrapper">
                                                        <div class="quote-title"><span class="icon shortcode   use-hover"></span><span class="icon shortcode   use-hover"></span><span class="icon shortcode   use-hover"></span><span class="icon shortcode   use-hover" ></span><span class="icon shortcode   use-hover"></span>  <span class="the-title">MALCOLM GLADWELL</span>
                                                        </div>
                                                    </div>
                                                    <div class="quote-content">
                                                        <p>Trong tất cả mọi nơi tôi đã viếng thăm trên thế giới, tôi đã tìm thấy Haddon là đẹp nhất và thú vị. Những con sò ngon trong nhà hàng của Haddon là thứ tốt nhất mà tôi có ở bất cứ đâu. Các căn cứ rất huyền diệu Tôi có thể tưởng tượng được những ngày khi tổ tiên của tôi vượt qua chúng, áo giáp và kiếm điên cuồng và ngựa ở khắp mọi nơi, khi họ cưỡi lên để đánh nhau bất cứ nơi nào cần thiết. Haddon đã đưa ra một cái nhìn tràn ngập về quá khứ trong khi vẫn giữ được nét quyến rũ của nó. Cảm ơn bạn đã có một niềm vui như vậy!</p>
                                                    </div>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="cbp-nav">
                                <div class="cbp-nav-pagination">
                                    <div class="cbp-nav-pagination-item"></div>
                                    <div class="cbp-nav-pagination-item""></div>
                                    <div class="cbp-nav-pagination-item""></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="vamtam-grid grid-1-1">
                        <div class="row ">
                            <div class="vamtam-grid grid-1-1">
                                <div class="TA_cdsratingsonlywide">
                                    <div id="CDSRATINGWIDGET637" class="cdsROW white">
                                        <div class="cdsROWContainer">
                                            <div class="cdsComponent logo">
                                                <a target="_blank" href=""><img src="https://www.tripadvisor.co.uk/img/cdsi/img2/branding/tripadvisor_logo_transp_340x80-18034-2.png">
                                                </a>
                                            </div>
                                            <div  class="cdsComponent cdsLocName">Memento Cafe</a> </div>
                                            <div id="CDSROWRATING637" class="cdsComponent cdsRating"> <img src="https://static.tacdn.com/img2/t4b/bldashboard/bubbleratings/4.0.png"> <span> 95 Reviews </span> </div>
                                            <!--<![endif]-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

 <script type="text/javascript"><!--
$(document).ready(function() {
   $('.owlCarousel').owlCarousel({
  items: 1,
  autoPlay: 50000,
  navigation: true,

  navigationText: false,
  pagination: true
});
});
--></script>
<style type="text/css" media="screen">

</style>

<!-- end 5 -->

<div class="clearfix"></div>

<!-- begin 9 -->

<div class='type-9'>
            <div class='container'>

                <div class='row'>
                    <!--COL 1-->
                    <p style="height: 100px"></p>
                    <div class='col-md-4 col-1'>
                        
                        <img class="img-responsive" src="images/PAG_3043_.jpg">
                        <h4>Omni Bridal Studio</h4>
                        <p>“Với phong cách trang điểm và sự kết hợp trang phục đầy tinh tế, Omni Bridal luôn thể hiện sự tự nhiên nhẹ nhàng nhưng không kém phần sang trọng và quyến rũ. Đặc biệt, những mẫu váy cưới 100% được nhập từ nước ngoài sẽ làm cho bạn thật xinh đẹp và hoàn hảo trong ngày hạnh phúc nhất của cuộc đời.”</p>
                    </div>
                    <!--COL 2-->
                    <div class='col-md-4 col-2'>
                        <img class="img-responsive" src="images/PAG_3133_.jpg">
                        <h4>Anh&Em Studio</h4>
                        <p>“Với phong cách trang điểm và sự kết hợp trang phục đầy tinh tế, Omni Bridal luôn thể hiện sự tự nhiên nhẹ nhàng nhưng không kém phần sang trọng và quyến rũ. Đặc biệt, những mẫu váy cưới 100% được nhập từ nước ngoài sẽ làm cho bạn thật xinh đẹp và hoàn hảo trong ngày hạnh phúc nhất của cuộc đời.”</p>
                    </div>
                    <!--COL 3-->
                    <div class='col-md-4 col-3'>
                        <img class="img-responsive" src="images/PAG_3306_.jpg">
                        <h4>Pag Studio</h4>
                        <p>“Chỉ hy vọng lưu giữ được một phần nào đó những khoảnh khắc bình dị, tự nhiên và hạnh phúc nhất …như một cách để tìm niềm vui nho nhỏ cho riêng mình”</p>
                    </div>
                    <p style="height: 100px"></p>
                </div>
            </div>
        </div>

<!-- end 9 -->

<div class="clearfix"></div>




<!-- begin footer -->

<footer class="text-muted well" id="last-footer">
    <section>
        <div class="row" style="font-size:11px;">
            <div class="container">
                <h3 class="subhead" style="text-align:center;">"Tất cả những gì chúng ta cần là tình yêu của bạn !"</h3>
                <div class="col-md-9">
                    <div class="row" >
                        <div class="col-md-3">
                            <div class="row footlinks">
                                <div class="col-xs-12">
                                    <h5>Dịch vụ cưới</h5>
                                    <ul class="noBullets">
                                        <li><i class="fa fa-angle-right"></i><a href="#">Nhà hàng tiệc cưới</a></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">Chụp ảnh cưới</a></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">Trang phục cưới</a></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">Nhẫn cưới</a></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">Trang điểm cô dâu</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row footlinks">
                                <div class="col-xs-12">
                                    <h5>Ý tưởng cưới</h5>
                                    <ul class="noBullets">
                                        <li><i class="fa fa-angle-right"></i><a href="#">Hoa cưới</a></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">Chụp hình cưới</a></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">Quà cảm ơn</a></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">Thiệp cưới</a></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">Trăng mật</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row footlinks">
                                <div class="col-xs-12">
                                    <h5>Áo cưới</h5>
                                    <ul class="noBullets"> 
                                        <li><i class="fa fa-angle-right"></i><a href="#">Váy cưới cô dâu</a></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">Váy phụ dâu</a></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">Vest chú rể</a></li>
                                        <li><i class="fa fa-angle-right"></i><a href="#">Áo dài cưới</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row footlinks">
                            <div class="col-xs-12">
                                <h5>Tin tức</h5>
                                <ul class="noBullets">
                                    <li><i class="fa fa-angle-right"></i><a href="#">Đám cưới của sao</a></li>
                                    <li><i class="fa fa-angle-right"></i><a href="#">Phong tục cưới hỏi</a></li>
                                    <li><i class="fa fa-angle-right"></i><a href="#">Dịch vụ đám cưới</a></li>
                                    <li><i class="fa fa-angle-right"></i><a href="#">Hình cưới đẹp</a></li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <hr/>           
                        </div><!--/.row inner--> 
                    </div>
                <div class="col-md-3 subscribe">
                    <div class="row">
                        <div class="col-xs-12">
                            <form class="form-inline" role="form">
                                <ul class="noBullets">
                                    <h5>Đăng ký để nhận tin !</h5>
                                    <li>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nhập địa chỉ email của bạn"></div>
                                    </li>
                                    <li class="text-center">
                                        <button type="submit" class="btn btn-success btn-sm">Đăng ký ngay bây giờ !</button>
                                    </li>
                                </ul>     
                            </form>     
                        </div>
                    </div>        
                </div>
            </div><!--/.container--> 
        </div><!--/.row outer--> 
        <footer>    
            <div class="row">
                <div class="container text-center">
                    <h5>Tất cả các quyền được bảo vệ © 2017 . <a href="mailto:chance2seo@gmail.com">Délicious</a></h5>
                </div>
            </div>
        </footer>
    </section>
</footer>

<!-- end footer -->

	
		
	
    </body>

</html>