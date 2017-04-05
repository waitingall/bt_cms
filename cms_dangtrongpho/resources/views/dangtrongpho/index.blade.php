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
        $less->compileFile('less/7.less', 'css/7.css');
        ?>
        <link href="css/7.css" rel="stylesheet" type="text/css" />

    </head>

    <body>


        <div class='type-7'>
            <div class='container'>
                <div style="text-align: center">
                    <img src="images/sushi-icon-5.svg" height="200px">
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
            </div>
        </div>
    </body>

</html>