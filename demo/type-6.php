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
        $less->compileFile('less/type-6.less', 'css/type-6.css');
        ?>
        <link href="css/type-6.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class='col-1'>
            <span>Col-1</span>
        </div>
        <div class='col-2'>
            <span>Col-2</span>
        </div>
    </body>

</html>