<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img {
                width: 70%;
                margin: auto;
            }
        </style>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/5.less', 'css/5.css');
        ?>
        <link href="css/5.css" rel="stylesheet" type="text/css" />

    </head>

    <body>


        <div class='type-5'>
            <div class='container'>
                <div class='row'>
                    <!--COL 1-->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="text-align: center;">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="images/5.PNG" alt="" width="460" height="345">
                                <h4 class="quote-summary">"Life tastes better with Délicious"</h4>
                                <div class="quote-title">
                                    <img src="images/SAO.PNG"> <span class="the-title">CHARLES F. LUMMIS</span>
                                </div>
                                <br>
                                <div class="quote-content">Started off with the Mixed Seafood Sampler (Venetian Style). Foe our main dish we ordered the Vermicelli with Cuttle Fish Ink Sauce over Polenta and Tuscan Roast Lamb Chops. Everything was delicious.
                                </div>
                            </div>

                            <div class="item">
                                <img src="images/5.PNG" alt="" width="460" height="345">
                                <h4 class="quote-summary">"Life tastes better with Délicious"</h4>
                                <div class="quote-title">
                                    <span class="the-title">CHARLES F. LUMMIS</span>
                                </div>
                                <div class="quote-content">Started off with the Mixed Seafood Sampler (Venetian Style). Foe our main dish we ordered the Vermicelli with Cuttle Fish Ink Sauce over Polenta and Tuscan Roast Lamb Chops. Everything was delicious.
                                </div>
                            </div>

                            <div class="item">
                                <img src="images/5.PNG" alt="" width="460" height="345">
                                <h4 class="quote-summary">"Life tastes better with Délicious"</h4>
                                <div class="quote-title">
                                    <span class="the-title">CHARLES F. LUMMIS</span>
                                </div>
                                <div class="quote-content">Started off with the Mixed Seafood Sampler (Venetian Style). Foe our main dish we ordered the Vermicelli with Cuttle Fish Ink Sauce over Polenta and Tuscan Roast Lamb Chops. Everything was delicious.
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>