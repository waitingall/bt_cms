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
        $less->compileFile('less/12.less', 'css/12.css');
        ?>
        <link href="css/12.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
	<div class="vamtam-grid grid-1-1  grid-1-1  first vamtam-hide-bg-lowres has-background extended no-extended-padding" style="
				background: url( 'images/waves-decoration.svg' ) repeat-x center top;
				background-size: auto;
			background-attachment: scroll;padding-top:200px;padding-bottom:200px;" id="vamtam-column-96738cfceefc27fd85b42ad18c895d21">
			</div>
    <div style="background: url( 'images/sushi-parallax-1.jpg' ) no-repeat ;
						background-size: cover;
						background-attachment: fixed;
						background-color:#4a4a4a;
						padding-top:80px;
						padding-bottom:80px;">
		<div class='container'>
			<div class="row">
                <div class="tea">
                    <div class="blank-space"></div>
                    <div class="sep">

                        <div class="sep-text-before">
                            <div class="sep-text-line"></div>
                        </div>
                        <div class="content">
                            <h2>Tea</h2>
                            <div class="today">Today Specials</div>
                        </div>
                        <div class="sep-text-after">
                            <div class="sep-text-line"></div>
                        </div>
                    </div>
                    <div class="blank-space"></div>
                </div>
            </div>
        </div>
    </div>
</div>
    </body>

</html>