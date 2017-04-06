<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
       
        <link href="css/15.css" rel="stylesheet" type="text/css" />

    </head>

    
    <body>


        <div class='type-15'>
            <div class='container'>
			<div class="row">
				
				 <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <td class="text-center">Id</td>
                          <td class="text-center">Name</td>
                        </tr>
                        <?php foreach($tests as $listDatas) { ?> 
                         <tr>
                          <td class="text-center"><?php echo $listDatas->test_id; ?></td>
                          <td class="text-center"><?php echo $listDatas->test_name; ?></td>
                        </tr>
                        <?php } ?>

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
    </body>


</html>
