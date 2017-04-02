<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title>CMS Le Quang Sang</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/9.less', 'css/9.css');
        ?>
		
		 <link href="css/9.css" rel="stylesheet" type="text/css" />
  

    </head>

    <body>


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
    </body>

</html>