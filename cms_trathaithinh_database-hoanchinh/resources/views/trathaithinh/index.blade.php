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
                            <p><a href="<?php echo $contents['url']; ?>">Book now</a></p>
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
		
		<!-- Database bt_cms -->
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
                          <td><?php echo $newsId2['description']; ?></td>
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
                        <h4>Welcome to Delicious</h4>
                        <p>“First and foremost I am a chef, whether behind the stove at one of my Northern California restaurants or for the past 15 years in front of the camera on my Food Network cooking shows. Creating new dishes and flavor combinations that bring cooks and our restaurant guests pleasure is my job and I love it.”</p>
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
<!-- end Welcome to Delicious -->

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
<!-- end MENU Today Specials -->

<div class="clearfix"></div>


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
		<div class="row">
                   <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                        
                        </tr>
                        
                         <tr>
                           <td><?php echo $newsId2['description']; ?></td>
                          <td><?php echo $newsId2['description']; ?></td>
                        </tr>
                      

                      </thead>
                   </table>
        </div>
        <div class="footer">
            
            <a href="#">
                <span class="end-footer" data-text="View the full menu">View the full menu</span>
            </a>
        </div>
        <p2></p2>
        </div>
    </div>
	
	
	<div id="main-content">
  <section class="content-area">
    <div class="container site-content">
	<table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                         
                        </tr>
                        
                         <tr>
                           <td><?php echo $newsId2['description']; ?></td>
                          <td><?php echo $newsId2['description']; ?></td>
                        </tr>
                       

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


<!-- Database bt_cms -->


<div class="clearfix"></div>

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
                                                        <div class="quote-title"><span class="icon shortcode   use-hover"></span><span class="icon shortcode   use-hover"></span><span class="icon shortcode   use-hover"></span><span class="icon shortcode   use-hover" ></span><span class="icon shortcode   use-hover"></span> — <span class="the-title">CHARLES F. LUMMIS</span>
                                                        </div>
                                                    </div>
                                                    <div class="quote-content">Out of all the place I have visited in the world, I have found Haddon to be the most beautiful and delightful. The delicious scones in Haddon's restaurant are the best I have had anywhere. The grounds are so magical I can almost imagine the days when my ancestors rode across them, armor and swords clanking and horses everywhere, as they rode off to fight wherever needed. Haddon has managed to give a magnificent glimpse into the past while still retaining all its charm. Thank you for such a delight.</div>
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
                                                        <div class="quote-title"><span class="icon"></span><span class="icon shortcode   use-hover"></span><span class="icon shortcode   use-hover"></span><span class="icon shortcode   use-hover" ></span><span class="icon shortcode   use-hover"></span> — <span class="the-title">M.F. MOONZAJER</span>
                                                        </div>
                                                    </div>
                                                    <div class="quote-content">Out of all the place I have visited in the world, I have found Haddon to be the most beautiful and delightful. The delicious scones in Haddon's restaurant are the best I have had anywhere. The grounds are so magical I can almost imagine the days when my ancestors rode across them, armor and swords clanking and horses everywhere, as they rode off to fight wherever needed. Haddon has managed to give a magnificent glimpse into the past while still retaining all its charm. Thank you for such a delight.!</div>
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
                                                        <div class="quote-title"><span class="icon shortcode   use-hover"></span><span class="icon shortcode   use-hover"></span><span class="icon shortcode   use-hover"></span><span class="icon shortcode   use-hover" ></span><span class="icon shortcode   use-hover"></span> — <span class="the-title">MALCOLM GLADWELL</span>
                                                        </div>
                                                    </div>
                                                    <div class="quote-content">
                                                        <p>Out of all the place I have visited in the world, I have found Haddon to be the most beautiful and delightful. The delicious scones in Haddon's restaurant are the best I have had anywhere. The grounds are so magical I can almost imagine the days when my ancestors rode across them, armor and swords clanking and horses everywhere, as they rode off to fight wherever needed. Haddon has managed to give a magnificent glimpse into the past while still retaining all its charm. Thank you for such a delight.</p>
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

          <div class="clearfix"></div>          

        <div class='type-7'>
			<table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <td class="text-center"></td>
                          <td class="text-center"></td>
                        </tr>
                       
                         <tr>
                           <td><?php echo $newsId2['description']; ?></td>
                          <td><?php echo $newsId2['description']; ?></td>
                        </tr>
                      

                      </thead>



                    </table>
            <div class='container'>
		
                <div style="text-align: center">
                    <img src="images/sushi-icon-5.svg" height="250px">
                </div>
                <div class='row'>
                    <!--COL 1-->
                    <div class='col-md-4'>
                        <div style="height: 50px"></div>
                        <h4 style="text-align: center;">Opening Times</h4>
                        <table class="opening-time-table">
                            <tbody>
                                <tr>
                                    <td>Week days</td>
                                    <td></td>
                                    <td>9.00 – 18:00</td>
                                </tr>
                                <tr>
                                    <td>Saturday</td>
                                    <td></td>
                                    <td>10.00 – 17:00</td>
                                </tr>
                                <tr>
                                    <td>Sunday</td>
                                    <td></td>
                                    <td>Closed</td>
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
                            <h4 style="text-align: center;">Directions</h4>
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

		<div class="clearfix"></div>
		<div class='type-9'>
            <div class='container'>

			
			
			
                <div class='row'>
				
                    <!--COL 1-->
                    <p style="height: 200px"></p>
                    <div class='col-md-4 col-1'>
                        <p style="height: 200px"></p>
                        <h4>Tools</h4>
                        <p>“Professional chefs rely on a battery of tools and equipment. Chefs must be conscious of their kitchen tools when planning a menu and understand their use and production capacity.”</p>
                    </div>
                    <!--COL 2-->
                    <div class='col-md-4 col-2'>
                        <img src="images/coffee-img-1.png">
                        <h3>Welcome</h3>
                        <p>“First and foremost I am a chef, whether behind the stove at one of my Northern California restaurants or for the past 15 years in front of the camera on my Food Network cooking shows. Creating new dishes and flavor combinations that bring cooks and our restaurant guests pleasure is my job and I love it.”</p>
                        <p style="height: 200px"></p>
                    </div>
                    <!--COL 3-->
                    <div class='col-md-4 col-3'>
                        <p style="height: 200px"></p>
                        <h4>Food</h4>
                        <p>“Creating new dishes and flavor combinations that bring cooks and our restaurant guests pleasure is my job and I love it.”</p>
                    </div>
                </div>
            </div>
        </div>
		<div class="clearfix"></div>
		
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
		
		<div class="clearfix"></div>
		  <div class='type-11'>
            <div class='container'>
                <div class="sep-text">
                    <div class="sep-text-before"><div class="sep-text-line"></div></div>
                    <div class="content">
                        <h2 class="text-divider-double">
                            We offer
                        </h2>
                        <div class="text-divider-subtitle">Today Specials</div>
                    </div>
                    <div class="sep-text-after"><div class="sep-text-line"></div></div>
                </div>
                <div style="text-align: center">
                    <div class='row'>
                        <!--COL 1-->
                        <div class='col-md-2-5'>
                            <div class="thumbnail">
                                <a href="/" title="Coffee &amp; Tea" class="has-border">
                                    <img width="300" height="300" src="images/coffee-thumb-1.jpg" alt=""> </a>
                            </div>
                            <h4 class="services-title">
                                <a href="/" title="Coffee &amp; Tea">Coffee &amp; Tea</a>
                            </h4>
                            <div class="services-content">
                                <p>Its delicious smooth blend and various varieties seductively charm you at the start of your day.</p>
                            </div>
                        </div>
                        <div class='col-md-2-5'>
                            <div class="thumbnail">
                                <a href="/" title="Coffee &amp; Tea" class="has-border">
                                    <img width="300" height="300" src="images/coffee-thumb-3.jpg" alt=""> </a>
                            </div>
                            <h4 class="services-title">
                                <a href="/" title="Coffee &amp; Tea">Bakery &amp; Sweets</a>
                            </h4>
                            <div class="services-content">
                                <p>These desserts aren’t simply favorites of ours; they also help define, in their own way…</p>
                            </div>
                        </div>
                        <div class='col-md-2-5'>
                            <div class="thumbnail">
                                <a href="/" title="Coffee &amp; Tea" class="has-border">
                                    <img width="300" height="300" src="images/coffee-thumb-4.jpg" alt=""> </a>
                            </div>
                            <h4 class="services-title">
                                <a href="/" title="Coffee &amp; Tea">Lunch Menu</a>
                            </h4>
                            <div class="services-content">
                                <p>We make our lunches and dinners with the finest ingredients we can find to make our meals as flavorful as possible.</p>
                            </div>
                        </div>
                        <div class='col-md-2-5'>
                            <div class="thumbnail">
                                <a href="/" title="Coffee &amp; Tea" class="has-border">
                                    <img width="300" height="300" src="images/coffee-thumb-5.jpg" alt=""> </a>
                            </div>
                            <h4 class="services-title">
                                <a href="/" title="Coffee &amp; Tea">Work Spots</a>
                            </h4>
                            <div class="services-content">
                                <p>Coffice in Stockholm is a great place to work from. Food options beyond pastries. Free WiFi.</p>
                            </div>
                        </div>
                        <div class='col-md-2-5'>
                            <div class="thumbnail">
                                <a href="/" title="Coffee &amp; Tea" class="has-border">
                                    <img width="300" height="300" src="images/coffee-thumb-6.jpg" alt=""> </a>
                            </div>
                            <h4 class="services-title">
                                <a href="/" title="Coffee &amp; Tea">Child  Friendly</a>
                            </h4>
                            <div class="services-content">
                                <p>Based in Barcelona, Pudding Bar was designed for spending the afternoon with the kids.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<div class="clearfix"></div>
		<div class="type_12" style="
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
				<div class="vamtam-blank-space " style="height:130px"></div></div></div></div>
				

	 	<div class="clearfix"></div>
	  <div class='type-15'>
            <div class='container'>
			<div class="row">
				
				 <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <td class="text-center">Id</td>
                          <td class="text-center">Name</td>
                        </tr>
                       
                         <tr>
                          <td class="text-center"><?php echo $contents['description']; ?></td>
                          <td class="text-center"><?php echo $contents['description']; ?></td>
                        </tr>
                     

                      </thead>
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
		
		<div class="clearfix"></div>
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
                                                            <a class="filter active">All</a>
                                                            <a class="filter" href="javascript:;" data-filter=".filter-gallery-1664">COFFEE SHOP</a><a class="filter" href="javascript:;" data-filter=".filter-gallery-1661">GOURMET</a><a class="filter" href="javascript:;" data-filter=".filter-gallery-1666">RECIPES</a> </div>
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

        <div>

       
            
        </div>
    </div>
    </div>
    </div>
    <script type='text/javascript' src="js/main.minc5bc.js"></script>
    <script type='text/javascript' src="js/custom-script.minc5bc.js"></script>
	
	<div class="clearfix"></div>
	

    </body>

</html>