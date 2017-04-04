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
        $less->compileFile('less/10.less', 'css/10.css');
        ?>
        <link href="css/10.css" rel="stylesheet" type="text/css" />

    </head>

    <body>


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
    </body>

</html>