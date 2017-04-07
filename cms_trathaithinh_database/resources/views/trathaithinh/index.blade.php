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
    </body>

</html>