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
                        <img src='images/sushi-icon-1.svg'>
                        <h4 class='title'>Futomaki</h4>
                        <p><span></span>
                            Sushi rice and seafood, etc. rolled in dried seaweed sheets. There are countless varieties of sushi rolls differing in ingredients and thickness. Sushi rolls prepared “inside out” are very popular outside of Japan, but rarely found in Japan.</p>
                    </div>
       
                      <!--COL 2-->
                    <div class='col-md-4 col-2' >
                  
                        <div class='col-2-top'>
                        <h4> RESERVATIONS</h4>
                        </div>
                        <div class='col-2-bottom'>
                            <h5> Making a reservation at Délicious restaurant is easy and takes just a couple of minutes.</h5>
                            <h6> +359 562 958</h6>
                            <p><a href="#">Book now</a></p>
                         </div>
                         
                        <div class='col-2-hinh'></div>
                       
                        
                    </div>
                 <!--COL 3-->
                    <div class='col-md-4 col-3'>
                        <img src='images/sushi-icon-2.svg'>
                        <h4 class='title'>Nigiri</h4>
                        <p><span></span>
                            Small rice balls with fish, shellfish, etc. on top. There are countless varieties of nigirizushi, some of the most common ones being tuna, shrimp, eel, squid, octopus and fried egg.</p>
                            
                    </div>

                </div>
            </div>
        </div>
    </body>

</html>