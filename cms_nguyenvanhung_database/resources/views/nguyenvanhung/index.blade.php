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
        $less->compileFile('less/13.less', 'css/13.css');
        ?>
        <link href="css/13.css" rel="stylesheet" type="text/css" />

    </head>

    <body>


        <div class='type-13'>
            <div class='container'>
 <div class="row">
                    
                   <table class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <td class="text-center">Id</td>
                          <td class="text-center">Name</td>
                        </tr>
                        <?php foreach($listData as $listDatas) { ?> 
                         <tr>
                          <td class="text-center"><?php echo $listDatas->test_id; ?></td>
                          <td class="text-center"><?php echo $listDatas->test_name; ?></td>
                        </tr>
                        <?php } ?>

                      </thead>



                    </table>

                    

                       

                        

            </div>
                <div class='row'>
                    <!--COL 1-->
                    <div class='col-md-4 col-1'>
                        <p style="height: 400px"></p>
                    </div>
                    <!--COL 2-->
                    <div class='col-md-5 col-2'>
                        <h2>Buddha:
                            <br>
                            How to drink tea?
                        </h2>
                        <p>The types of tea are white tea, green tea, yellow tea, oolong tea, black tea, and pu-erh tea. “When you have the title ‘white tea’ or ‘green tea’, you’re actually describing the process by which it has been made,” Woollard says.</p>
                    </div>
                    <!--COL 3-->
                    <div class='col-md-3 col-3'>
                        
                    </div>
                </div>
                
                <div class='row'>
                    <!--COL 1-->
                    <div style="text-align: center">
                        <img src="images/coffee-photo-5.jpg">
                    </div>
                    
                </div>
            </div>
        </div>
    </body>

</html>