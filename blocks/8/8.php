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
            <div class='container'>
                <div class='row'>

                    <!--COL 1-->
                    <div class='col-md-4 col-1'>
                        <img src='images/sushi-icon-1.svg'>
                        <h4 class='title'>Futomaki</h4>
                        <p><span class="vamtam-blank-space  vamtam-hide-lowres"></span>
                            Sushi rice and seafood, etc. rolled in dried seaweed sheets. There are countless varieties of sushi rolls differing in ingredients and thickness. Sushi rolls prepared “inside out” are very popular outside of Japan, but rarely found in Japan.</p>
                    </div>


                </div>
            </div>
        </div>
    </body>

</html>