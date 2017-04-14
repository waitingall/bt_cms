<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
		
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type='text/javascript' src='js/jquery-2.1.1.min.js'></script>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/style.less', 'css/style.css');
        ?>
        <link href="css/5.css" rel="stylesheet" type="text/css" />
         <link rel='stylesheet' href="css/cubeportfolio.min.css" type='text/css' media='all' />
        <link rel='stylesheet' href="css/all.css" type='text/css' media='all' />

    </head>