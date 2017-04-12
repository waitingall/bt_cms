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


<!--man hinh 1-->
    <div class='type-9'>
			<div class='style' background: url(../images/coffee-img-4-1.jpg) no-repeat center top; background-size: auto; background-position-y: -308px;></div>
            <div class='container'>
                <div class='row'>
				
                    <!--COL 1-->
                    <p style="height: 200px"></p>
                    <div class='col-md-4 col-1'>
                        <p style="height: 200px"></p>
                        <h4>Công cụ</h4>
                        <p>“Người đầu bếp chuyện nghiệp cần một bộ dụng cụ và thiết bị, người đầu bếp phải quan tâm tới dụng cụ làm bếp của họ. nuoi dau bep phai quan tam toi dung cu lam bep cua ho Khi lên kế hoạch cho một thực đơn và hiểu rõ về việc sử dụng và chung.”</p>
                    </div>
                    <!--COL 2-->
                    <div class='col-md-4 col-2'>
                        <img src="images/coffee-img-1.png">
                        <h3>Chào mừng</h3>
                        <p>“Trước hết, tôi là đầu bếp,ở Bắc California hay trong 15 năm qua tôi Tạo ra những món ăn mới và sự kết hợp hương vị đem lại cho các đầu bếp và khách hàng của chúng tôi niềm vui là công việc của tôi.”</p>
                        <p style="height: 200px"></p>
                    </div>
                    <!--COL 3-->
                    <div class='col-md-4 col-3'>
                        <p style="height: 200px"></p>
                        <h4>Thức ăn</h4>
                        <p>“Chúng tôi Tạo ra những món ăn mới và sự kết hợp hương vị đem lại cho các đầu bếp và khách hàng của chúng tôi niềm vui là công việc của tôi và tôi thích nó.”</p>
                    </div>
                </div>
            </div>
</div>	
		
		
<div class="clearfix"></div>

<div class='welcome-2'>

    <div class="mask">
        <div class='container'>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">

                    <div class="welcome">
                        <h4>Welcome to Delicious</h4>
                        <p>“First and foremost I am a chef, whether behind the stove at one of my Northern California restaurants or for the past 15 years in front of the camera on my Food Network cooking shows. Creating new dishes and flavor combinations that bring cooks and our restaurant guests pleasure is my job and I love it.”</p>
                        <p><a href="https://en.wikipedia.org/wiki/Tyler_Florence" target="_blank">M.R. Tyler Florence</a></p>
                        <p><img src="images/sign.svg" alt="sign"></p>    
                    </div>

                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>

</div>
<!-- ket thuc man hinh 1 -->

<div class="clearfix"></div>

<!-- man hinh menu -->
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
                            <h2>MENU</h2>
                            <div class="today">Today Specials</div>
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
<!-- ket thuc man hinh menu -->

<div class="clearfix"></div>

<!-- man hinh 2 -->
 <div class='type-2'>
        <div class="container">	 
        	<div class="row r1">
               	   <p1></p1>        	   
                   <p3><img src="images/sushi-icon-3.svg" width="100" height="100"></p3>
            </div>
        
            <div class="row r2">
                <div class="col-md-2 col1">
                        <img src="images/Sushi-thumbs-1.jpg" width="170" height="180">
                        <h1 title="Avocado Maki">Avocado Maki</h1>
                        <p>Avocado, Nori, Sushi Rice, Sashimi-grade Salmon</p>
                </div>

                <div class="col-md-2 col2">
                        <img src="images/Sushi-thumbs-2.jpg" width="170" height="180">
                        <h1 title="Spicy Tuna Roll">Spicy Tuna Roll</h1>
                        <p>Nori, Sushi Rice, Sashimi-grade tuna, Sriracha sauce, Green scallion, Sesame seeds, Spicy mayo</p>
                </div>

                <div class="col-md-2 col3">
                        <img src="images/Sushi-thumbs-3.jpg" width="170" height="180">
                        <h1 title="Salmon Dragon Roll">Salmon Dragon Roll</h1>
                        <p>Nori, Sushi Rice, Shrimp Tempura, Tobiko, Grilled eel, Avocados, Japanese cucumber, Unagi Sauce, Spicy mayo</p>
                </div>

                <div class="col-md-2 col4">
                        <img src="images/Sushi-thumbs-4.jpg" width="170" height="180">
                        <h1 title="Smoked Salmon and Caviar Sushi">Smoked Salmon and Caviar Sushi</h1>
                        <p>Cream cheese, Chives, Smoked salmon, Nori, Blanched leeks, Wasabi Tobbiko Caviar, Rice</p>
                </div>

                <div class="col-md-2 col5">
                        <img src="images/Sushi-thumbs-5.jpg" width="170" height="180">
                        <h1 title="Vegetarian Futomaki">Vegetarian Futomaki</h1>
                        <p>Tomato, Bell pepper, Cucumber, Lettuce leaves, Nori, Sushi Rice</p>
                </div>

                <div class="col-md-2 col6">
                        <img src="images/Sushi-thumbs-6.jpg" width="170" height="180">
                        <h1 title="Cucumber Maki">Cucumber Maki</h1>
                        <p>Nori, Sushi Rice, Cucumber strips, Sesame Seeds</p>
                </div>
            </div>
		<div class="my-table">
        <div class='container'>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">

                    <!-- begin table -->
                    <table class="table">
                      <thead class="thead-default">
                        <tr>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      
                     

                      <tbody>
                        <tr>
                          <td><?php echo $newsId1['description']; ?></td>
                          <td><?php echo $newsId2['description']; ?></td>
                        </tr>
                      </tbody>


                      
                    </table>
                    <!-- end table -->

            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>
        <div class="footer">
            
            <a href="#">
                <span class="end-footer" data-text="View the full menu">View the full menu</span>
            </a>
        </div>
        <p2></p2>
        </div>
    </div>
	<!-- ket thuc man hinh 2 -->
	<div class='clearfix'></div>
	<!-- man hinh 3 -->
<div class='type-3'>
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
                          <div class="filter-controls"> <a class="filter active">câu chuyện</a> <a class="filter" href="javascript:;" data-filter=".filter-gallery-1664">đội ngũ</a><a class="filter" href="javascript:;" data-filter=".filter-gallery-1661">Giải thưởng</a> </div>
                        </div>
                        <div class="wrapper-gallery-filter grid row">
                        
                        <div class="row "><div class="col-md-3 colum-1" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-a3a03fada3332599c8e388aba263ec15"><img src='images/chef-illustration.svg'><p></p></div>
<div class="col-md-9" ><div class="row"><h2>người đầu bếp sushi: Kiyokawa</h2></div>
<div class="row "><div class="col-md-4" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-061c782c6984861cdf2a58f82bd3cec5"><p>Sau gần 20 năm ở thành phố, đầu bếp sushi Satoshi Kiyokawa đã trở thành đầu bếp chính trong quán cà phê Los Angeles tại nhà hàng Go By Kiyokawa của Beverly Hills. Kiyokawa rút ra cảm hứng từ những điều đơn giản trong cuộc sống, nhưng thực phẩm của mình là bất cứ điều gì nhưng không bình thường.</p></div>
<div class="col-md-4" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-e0a91ebdf5fbba4639de79222469b525"><p>Ghi chép từ sự ra đời của mình ở Kobe, Nhật Bản, phong cách của Kiyokawa bắt nguồn từ những thực tiễn Nhật Bản truyền thống. Bằng cách khai thác vào sự sáng tạo của mình, ông đã tạo ra một kinh nghiệm thực sự độc nhất vô nhị: các món ăn như cá hun khói của mình và bát đá chạm tay đã kiếm được</p></div>
<div class="col-md-4" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-51ca16e64e2ee8626f1a0e2ec1b5359a"><p>Anh ấy là một người trung thành trong Angelenos. Bằng cách tập trung vào việc trình bày độc đáo và cá chất lượng cao trong một thành phố được biết đến với sushi, Kiyokawa cung cấp một trải nghiệm sushi thú vị nhưng thân mật ở trung tâm Los Angeles.</p></div></div></div></div>
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
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- ket thuc man hinh 3 -->
<div class='clearfix'></div>
<!-- man hinh 4 -->
<div class="my-table">
        <div class='container'>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">

                    <!-- begin table -->
                    <table class="table">
                      <thead class="thead-default">
                        <tr>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      
                   

                      <tbody>
                        <tr>
                           <td><?php echo $newsId1['description']; ?></td>
                          <td><?php echo $newsId2['description']; ?></td>
                        </tr>
                      </tbody>

                      
                      
                    </table>
                    <!-- end table -->

            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>

<div class="clearfix"></div>

    <div class='type 5'>
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
                                                    <h4 class="quote-summary">"tận hưởng cuộc sống tốt hơn với món ăn ngon"</h4>
                                                    <div class="quote-title-wrapper clearfix">
                                                        <div class="quote-title"><span class="icon shortcode   use-hover"></span><span class="icon shortcode   use-hover"></span> — <span class="the-title">Loại thứ nhất là sushi nắm, gọi là nigirizushi.</span>
                                                        </div>
                                                    </div>
                                                    <div class="quote-content">Cơm sumeshi được đắp lên bằng một miếng Neta. Ở giữa thường có một chút wasabi. Phía trên miếng neta có thể có một chút gừng xay nhuyễn hoặc vài hạt hành xanh bào nhỏ. Loại này phổ biến nhất.</div>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="cbp-item">
                                        <div class="cbp-item-wrapper">
                                            <blockquote class="clearfix">
                                                <div class="quote-text">
                                                    <h4 class="quote-summary">"tạo ra món ăn bằng trái tim, nấu ăn bằng tình yêu."</h4>
                                                    <div class="quote-title-wrapper clearfix">
                                                        <div class="quote-title"><span class="icon"></span><span class="icon shortcode   use-hover"></span> — <span class="the-title">Loại thứ hai là sushi cuộn, gọi là makizushi.</span>
                                                        </div>
                                                    </div>
                                                    <div class="quote-content">được cuốn như các đồ ăn cuốn của Việt Nam, nhưng bên ngoài là lớp rong biển sấy khô; được tẩm muối và dầu mè.Thành phần bao gồm cơm, dầu vừng, muối, hạt vừng, một lượng nhỏ giấm và đường thường được thêm vào làm gia vị. Nguyên liệu được đặt trên một miếng rong biển khô. Cơm tẩm gia vị được phết lên miếng rong biển. Các thành phần khác như trứng chiên, cà-rốt, jăm-bông, thịt bò băm viên tẩm gia vị hoặc bánh cá (loại bánh làm từ cá và rau quả, phổ biến nhất là khoai tây) tẩm gia vị, củ cải ngâm, rau bina tẩm gia vị,cá ngừ,tôm hấp và dưa leo được đặt lên cơm, sau đó cuộn lại. Có lúc, người ta còn cho cuộn makizushi lăn qua trứng, bột chiên xù cho giòn. Khi ăn chấm nước tương, cũng có thể là mayonnaise hay nước sốt cà chua.Makizushi xưa được cắt đều làm 6 khoanh, ngày nay người ta có thể được cắt thành 12 khoanh hoặc hơn.!</div>
                                                </div>
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="cbp-item" style="width: 1260px; left: 2520px; top: 0px;">
                                        <div class="cbp-item-wrapper">
                                            <blockquote class="clearfix">
                                                <div class="quote-text">
                                                    <h4 class="quote-summary">“vẽ hình dep giống như nấu ăn ngon, có thể nếm thử, nhưng không giải thích được.”</h4>
                                                    <div class="quote-title-wrapper">
                                                        <div class="quote-title"><span class="icon shortcode   use-hover"></span><span class="icon shortcode   use-hover"></span> — <span class="the-title">Loại thứ tư là sushi lên men, gọi là narezushi.</span>
                                                        </div>
                                                    </div>
                                                    <div class="quote-content">
                                                        <span>Sushi ủ trong một thời gian dài cho lên men.</span>
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
<!-- ket thuc man hinh 4 -->
	
<!-- man hinh 5 -->
    

<!-- ket thuc man hinh 5 -->
<div class='clearfix'></div>
<!-- man hinh 6 -->
	<div id="main-content">
        <section class="content-area">
            <div class="container site-content">
            <div class="row">
                    
    <div class="my-table">
        <div class='container'>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">

                    <!-- begin table -->
                    <table class="table">
                      <thead class="thead-default">
                        <tr>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      
                   

                      <tbody>
                        <tr>
                           <td><?php echo $newsId1['description']; ?></td>
                          <td><?php echo $newsId2['description']; ?></td>
                        </tr>
                      </tbody>

                      
                      
                    </table>
                    <!-- end table -->

				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</div>
                    
        <div class='type-7'>
            <div class='container'>
                <div style="text-align: center">
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
                                    <td>Ngày thường</td>
                                    <td></td>
                                    <td>9.00 – 18:00</td>
                                </tr>
                                <tr>
                                    <td>Thứ bảy</td>
                                    <td></td>
                                    <td>10.00 – 17:00</td>
                                </tr>
                                <tr>
                                    <td>Chủ nhật</td>
                                    <td></td>
                                    <td>Đóng cửa</td>
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
                            <h4 style="text-align: center;">Địa chỉ</h4>
                            <p style="text-align: center;">
                                London, UK
                                <br>
                                10, Firs Avenue, Muswell Hill
                            </p>
                            <div style="height: 5px"></div>
                            <p style="text-align: center">
                                <a href="#" target="_self" style="font-size: 13px;" class="view-button hover-accent1 ">
                                    <span class="btext" data-text="View on map">View on map</span>
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
                    <img src="images/photo-sushi-7.jpg" height="400px">
                </div>
            </div>
        </div>
<!-- ket thuc man hinh 6 -->

<div class='clearfix'></div>
<!-- man hinh 7 -->
	<div class='type-10'>
            <div class='container'>
        <div class='row'>
                    <!--COL 1-->
                    <div class='col-md-6'>
                        <div class='row'>
                            <!--COL 1-->
                            <div class='col-md-5 colu-1'>
                                <img src="./images/coffee-photo-1.jpg" width="100%">
                            </div>
                            <!--COL 2-->
                            <div class='col-md-7 col-2'>
							<div style="text-align: center; padding-top: 15px">
							<img src="./images/banh.jpg">
							</div>
                                <h3 style="text-align: center;">Brunch</h3>
                                <h5 class="today-specials" style="text-align: center;">Today Specials</h5>
                                <div class="today-specials-menu">
                                    <h3 class="" title="Cashew Chicken With Stir-Fry Vegetables &amp; Green Salad">Cashew Chicken With Stir-Fry Vegetables &amp; Green Salad
                                        <span class="today-specials-price">$22</span>
                                    </h3> 
                                    <div class="today-specials-description">Cashew Chicken With Stir-Fry Vegetables served with green salad, sprouts and stewed mushrooms.
                                    </div>
                                </div>
                                <div class="today-specials-menu">
                                    <h3 class="" title="Optic Big Breakfast Combo Menu">Optic Big Breakfast Combo Menu
                                        <span class="today-specials-price">$20</span>
                                    </h3>
                                    <div class="today-specials-description">
                                    </div>
                                </div>
                                <div class="today-specials-menu">
                                    <h3 class="" title="Coffee and Pain au chocolat (Chocolate croissant) Combo Menu">Coffee and Pain au chocolat (Chocolate croissant) Combo Menu
                                        <span class="today-specials-price">$11</span>
                                    </h3>
                                    <div class="today-specials-description">Hot coffee in the company of Beautiful homemade croissants, each containing a bar of high-quality dark chocolate, make for ...
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
							<img src="./images/coffee.jpg">
							</div>
                                <h3 style="text-align: center;">Happy hour</h3>
                                <h5 class="today-specials" style="text-align: center;">Starts at 3pm</h5>
                                <p style="text-align: center;">The restaurant will open at 3pm for happy hour and dinner service starting at 5pm. We will continue to offer brunch on weekends from 10am-3pm with bottomless mimosas. We will also continue with our late night lounge on Friday and Saturdays until 2am.</p>
                                <h4 style="text-align: center;">+359 562 958</h4>
                                <h6 style="text-align: center;">30 minute guarantee!</h6>
                                <p style="text-align: center;">
                                    <a href="#" target="_self" style="font-size: 14px;" class="book-table-button accent1  button-border hover-accent1 ">
                                        <span class="book-table-text" data-text="Book a table!" style="color:#000000">Book a table!</span>
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
<!-- ket thuc man hinh 7 -->
<div class='clearfix'></div>
<!-- man hinh 8 -->

<!-- ket thuc man hinh 8 -->
<div class='clearfix'></div>
<!-- man hinh them-->

<!-- man hinh them-->		
<div class='clearfix'></div>
<!-- man hinh 9 -->
       <div class="" style="
				background: url( 'images/sushi-parallax-1.jpg' ) no-repeat ;
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
									Tea
								</h2>
								<div class="text-divider-subtitle">
								Today Specials
								</div> 
							</div>
							<div class="sep-text-after">
								<div class="sep-text-line">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="vamtam-blank-space " style="height:130px;width:1300px;"></div></div></div></div>
<!-- ket thuc man hinh 9 -->
<div class='clearfix'></div>

<!-- man hinh 10 -->
<div class='type-13'>
            <div class='container'>
			<table class="table">
                      <thead class="thead-default">
                        <tr>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      
                   

                      <tbody>
                        <tr>
                           <td><?php echo $newsId1['description']; ?></td>
                          <td><?php echo $newsId2['description']; ?></td>
                        </tr>
                      </tbody>

                      
                      
                    </table>
                <div class='row'>
                    <!--COL 1-->
                    <div class='col-md-4 col-1'>
                        <p style="height: 400px"></p>
                    </div>
                    <!--COL 2-->
                    <div class='col-md-5 col-2'>
                        <h2>Giới thiệu:
                            <br>
                            Nguồn gốc của trà!!
                        </h2>
                        <p>Chè Việt Nam được sản xuất ở nhiều vùng đã được biết đến với nhà trà. Ví dụ, một số nằm giữa rừng chè rộng lớn của vùng cao nguyên Lâm Đồng, nơi có một cộng đồng các ngôi nhà cổ Ruông được xây dựng vào cuối thế kỷ 18. Việt Nam có cây lâu đời nhất thế giới, có từ 1000 năm.</p>
                    </div>
                    <!--COL 3-->
                    <div class='col-md-3 col-3'>
                        
                    </div>
                </div>
                
                <div class='row'>
                    <!--COL 1-->
                    <div style="text-align: center">
                        <img src="images/coffee-photo-5.jpg">
                    </div>
                    
                </div>
            </div>
        </div>
<!-- ket thuc man hinh 10 -->
<div class='clearfix'></div>

<!-- man hinh 9 -->
<script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 600);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
    <style>
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
            background: orange;
            border-radius: 100%
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 12 css */
        /*
        .jssora12l                  (normal)
        .jssora12r                  (normal)
        .jssora12l:hover            (normal mouseover)
        .jssora12r:hover            (normal mouseover)
        .jssora12l.jssora12ldn      (mousedown)
        .jssora12r.jssora12rdn      (mousedown)
        */
        .jssora12l, .jssora12r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 30px;
            height: 46px;
            cursor: pointer;
            background: url('img/a12.png') no-repeat;
            overflow: hidden;
        }
        .jssora12l { background-position: -16px -37px; }
        .jssora12r { background-position: -75px -37px; }
        .jssora12l:hover { background-position: -136px -37px; }
        .jssora12r:hover { background-position: -195px -37px; }
        .jssora12l.jssora12ldn { background-position: -256px -37px; }
        .jssora12r.jssora12rdn { background-position: -315px -37px; }
    </style>
    <script type="text/javascript">jssor_1_slider_init();</script>

<!-- ket thuc man hinh 9 -->
<div class='clearfix'></div>

<!-- man hinh 9 -->
<div class='type-15'>
            <div class='container'>
			<div class="row">
				
				 <table class="table">
                      <thead class="thead-default">
                        <tr>
                          <th></th>
                          <th></th>
                        </tr>
                      </thead>
                      
                   

                      <tbody>
                        <tr>
                           <td><?php echo $newsId1['description']; ?></td>
                          <td><?php echo $newsId2['description']; ?></td>
                        </tr>
                      </tbody>

                      
                      
                    </table>
			
			</div>
                <div class="sep-text">
                    <div class="sep-text-before"><div class="sep-text-line"></div></div>
                    <div class="content">
                        <h2 class="text-divider-double">
                            Menu
                        </h2>
                        <div class="text-divider-subtitle">Today Specials</div>
                    </div>
                    <div class="sep-text-after"><div class="sep-text-line"></div></div>
                </div>
                <div class='row'>
                    <!--COL 1-->
                    <div class='col-md-4'>
                        <h2 class="title_menu">
                            Breakfast
                        </h2>
                        <div class="today-specials-menu">
                            <h3 class="" title="Antioxidant Fruits Mix">Antioxidant Fruits Mix
                                <span class="today-specials-price">$8</span>
                            </h3>
                            <div class="today-specials-description">
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Blueberry banana pancakes">Blueberry banana pancakes
                                <span class="today-specials-price">$5</span>
                            </h3>
                            <div class="today-specials-description">
                                Banana, almond milk, vanilla, cinnamon, blueberry topping
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Fig and lemon cake">Fig and lemon cake
                                <span class="today-specials-price">$7</span>
                            </h3>
                            <div class="today-specials-description">
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Antioxidant Fruits Mix">Antioxidant Fruits Mix
                                <span class="today-specials-price">$8</span>
                            </h3>
                            <div class="today-specials-description">
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Blueberry banana pancakes">Blueberry banana pancakes
                                <span class="today-specials-price">$5</span>
                            </h3>
                            <div class="today-specials-description">
                                Banana, almond milk, vanilla, cinnamon, blueberry topping
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Fig and lemon cake">Fig and lemon cake
                                <span class="today-specials-price">$7</span>
                            </h3>
                            <div class="today-specials-description">
                            </div>
                        </div>
                    </div>
                    <!--COL 2-->
                    <div class='col-md-4'>
                        <h2 class="title_menu">
                            Dinner
                        </h2>
                        <div class="today-specials-menu">
                            <h3 class="" title="Antioxidant Fruits Mix">Antioxidant Fruits Mix
                                <span class="today-specials-price">$8</span>
                            </h3>
                            <div class="today-specials-description">
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Blueberry banana pancakes">Blueberry banana pancakes
                                <span class="today-specials-price">$5</span>
                            </h3>
                            <div class="today-specials-description">
                                Banana, almond milk, vanilla, cinnamon, blueberry topping
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Fig and lemon cake">Fig and lemon cake
                                <span class="today-specials-price">$7</span>
                            </h3>
                            <div class="today-specials-description">
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Antioxidant Fruits Mix">Antioxidant Fruits Mix
                                <span class="today-specials-price">$8</span>
                            </h3>
                            <div class="today-specials-description">
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Blueberry banana pancakes">Blueberry banana pancakes
                                <span class="today-specials-price">$5</span>
                            </h3>
                            <div class="today-specials-description">
                                Banana, almond milk, vanilla, cinnamon, blueberry topping
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Fig and lemon cake">Fig and lemon cake
                                <span class="today-specials-price">$7</span>
                            </h3>
                            <div class="today-specials-description">
                            </div>
                        </div>
                    </div>
                    <!--COL 3-->
                    <div class='col-md-4'>
                        <h2 class="title_menu">
                            Dessert
                        </h2>
                        <div class="today-specials-menu">
                            <h3 class="" title="Antioxidant Fruits Mix">Antioxidant Fruits Mix
                                <span class="today-specials-price">$8</span>
                            </h3>
                            <div class="today-specials-description">
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Blueberry banana pancakes">Blueberry banana pancakes
                                <span class="today-specials-price">$5</span>
                            </h3>
                            <div class="today-specials-description">
                                Banana, almond milk, vanilla, cinnamon, blueberry topping
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Fig and lemon cake">Fig and lemon cake
                                <span class="today-specials-price">$7</span>
                            </h3>
                            <div class="today-specials-description">
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Antioxidant Fruits Mix">Antioxidant Fruits Mix
                                <span class="today-specials-price">$8</span>
                            </h3>
                            <div class="today-specials-description">
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Blueberry banana pancakes">Blueberry banana pancakes
                                <span class="today-specials-price">$5</span>
                            </h3>
                            <div class="today-specials-description">
                                Banana, almond milk, vanilla, cinnamon, blueberry topping
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Fig and lemon cake">Fig and lemon cake
                                <span class="today-specials-price">$7</span>
                            </h3>
                            <div class="today-specials-description">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- ket thuc man hinh 9 -->
<div class='clearfix'></div>

<!-- man hinh 9 -->
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
                                                            <a class="filter active">All</a>
                                                            <a class="filter" href="javascript:;" data-filter=".filter-gallery-1664">COFFEE SHOP</a><a class="filter" href="javascript:;" data-filter=".filter-gallery-1661">GOURMET</a><a class="filter" href="javascript:;" data-filter=".filter-gallery-1666">RECIPES</a> </div>
                                                    </div>
                                                    <div class="wrapper-gallery-filter grid row">
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1664">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/01.jpg"><img src="images/01.jpg" alt="Restaurant" title="Restaurant" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1664">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/02.jpg"><img src="images/02.jpg" alt="Restaurant" title="Restaurant" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1661">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/03.jpg"><img src="images/03.jpg" alt="Other" title="Other" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1661">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/04.jpg"><img src="images/04.jpg" alt="Other" title="Other" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1666">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/05.jpg"><img src="images/05.jpg" alt="Rooms" title="Rooms" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1666">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/06.jpg"><img src="images/06.jpg" alt="Rooms" title="Rooms" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1666">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/07.jpg"><img src="images/07.jpg" alt="Rooms" title="Rooms" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1666">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/08.jpg"><img src="images/08.jpg" alt="Rooms" title="Rooms" />
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

        <div>

       
            
        </div>
    </div>
    </div>
    </div>
    <script type='text/javascript' src="js/main.minc5bc.js"></script>
    <script type='text/javascript' src="js/custom-script.minc5bc.js"></script>
<!-- ket thuc man hinh 9 -->
<div class='clearfix'></div>

<!-- man hinh 9 -->

<!-- ket thuc man hinh 9 -->
<div class='clearfix'></div>

<!-- man hinh 9 -->
		
<!-- ket thuc man hinh 9 -->
<div class='clearfix'></div>

<!-- man hinh 9 -->

<!-- ket thuc man hinh 9 -->
<div class='clearfix'></div>

<!-- man hinh 9 -->
<!-- ket thuc man hinh 9 -->
<div class='clearfix'></div>

	
 <script type="text/javascript"><!--
$(document).ready(function() {
   $('.owlCarousel').owlCarousel({
  items: 1,
  autoPlay: 70000,
  navigation: true,

  navigationText: false,
  pagination: true
});
});
--></script>
<style type="text/css" media="screen">
  
</style>



    </body>

</html>