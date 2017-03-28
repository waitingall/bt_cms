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
        $less->compileFile('less/3.less', 'css/3.css');
        ?>
        <link href="css/3.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        
       <div class="row r1">
               <div class="col-md-1">
                   <img src="image/sushi-icon-3.svg" width="100" height="100">
               </div>
       </div>
       
        <div class="container">
            <div class="row">
                <div class="col-md-2 col1">
                        <img src="image/Sushi-thumbs-1.jpg" width="170" height="170">
                        <h1 title="Avocado Maki">Avocado Maki</h1>
                        <p>Avocado, Nori, Sushi Rice, Sashimi-grade Salmon</p>
                </div>

                <div class="col-md-2 col2">
                        <img src="image/Sushi-thumbs-2.jpg" width="170" height="170">
                        <h1 title="Spicy Tuna Roll">Spicy Tuna Roll</h1>
                        <p>Nori, Sushi Rice, Sashimi-grade tuna, Sriracha sauce, Green scallion, Sesame seeds, Spicy mayo</p>
                </div>

                <div class="col-md-2 col3">
                        <img src="image/Sushi-thumbs-3.jpg" width="170" height="170">
                        <h1 title="Salmon Dragon Roll">Salmon Dragon Roll</h1>
                        <p>Nori, Sushi Rice, Shrimp Tempura, Tobiko, Grilled eel, Avocados, Japanese cucumber, Unagi Sauce, Spicy mayo</p>
                </div>

                <div class="col-md-2 col4">
                        <img src="image/Sushi-thumbs-4.jpg" width="170" height="170">
                        <h1 title="Smoked Salmon and Caviar Sushi">Smoked Salmon and Caviar Sushi</h1>
                        <p>Cream cheese, Chives, Smoked salmon, Nori, Blanched leeks, Wasabi Tobbiko Caviar, Rice</p>
                </div>

                <div class="col-md-2 col5">
                        <img src="image/Sushi-thumbs-5.jpg" width="170" height="170">
                        <h1 title="Vegetarian Futomaki">Vegetarian Futomaki</h1>
                        <p>Tomato, Bell pepper, Cucumber, Lettuce leaves, Nori, Sushi Rice</p>
                </div>

                <div class="col-md-2 col6">
                        <img src="image/Sushi-thumbs-6.jpg" width="170" height="170">
                        <h1 title="Cucumber Maki">Cucumber Maki</h1>
                        <p>Nori, Sushi Rice, Cucumber strips, Sesame Seeds</p>
                </div>
            </div>
        </div>

    </body>

</html>