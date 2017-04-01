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
        $less->compileFile('less/11.less', 'css/11.css');
        ?>
        <link href="css/11.css" rel="stylesheet" type="text/css" />

    </head>

    <body>


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
    </body>

</html>