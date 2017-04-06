<!DOCTYPE html>
<html lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type='text/javascript' src="js/jquery-2.1.1.min.js"></script>
    <script type='text/javascript' src="js/bootstrap.min.js"></script>
    <link rel='stylesheet' href="css/bootstrap.min.css" type='text/css' media='all' />
    <link rel='stylesheet' href="css/font-awesome.min.css" type='text/css' media='all' />
    <link rel='stylesheet' href="css/16.css" type='text/css' media='all' />
    <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/16.less', 'css/16.css');
        ?>
</head>
<body>
    <div id="main-content">
        <section class="content-area">
            <div class="container site-content">
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
                <div class="row">
                    <main id="main" class="site-main col-sm-12 full-width">
                        <article id="post-1668" class="post-1668 page type-page status-publish hentry">
                            <div class="entry-content">
                                <div id="pl-1668">
                                    <div class="panel-grid" id="pg-1668-0">
                                        <div class="panel-grid-cell" id="pgc-1668-0-0">
                                            <div class="so-panel widget widget_gallery panel-first-child panel-last-child" id="panel-1668-0-0-0" data-index="0">
                                                <div class="thim-widget-gallery thim-widget-gallery-base">
                                                    <div class="wrapper-filter-controls">
                                                        <div class="filter-controls">
                                                            <a class="filter active">All</a>
                                                            <a class="filter" href="javascript:;" data-filter=".filter-gallery-1664">COFFEE SHOP</a><a class="filter" href="javascript:;" data-filter=".filter-gallery-1661">GOURMET</a><a class="filter" href="javascript:;" data-filter=".filter-gallery-1666">RECIPES</a> </div>
                                                    </div>
                                                    <div class="wrapper-gallery-filter grid row">
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1664">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/16/01.jpg"><img src="images/16/01.jpg" alt="Restaurant" title="Restaurant" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1664">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/16/02.jpg"><img src="images/16/02.jpg" alt="Restaurant" title="Restaurant" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1661">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/16/03.jpg"><img src="images/16/03.jpg" alt="Other" title="Other" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1661">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/16/04.jpg"><img src="images/16/04.jpg" alt="Other" title="Other" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1666">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/16/05.jpg"><img src="images/16/05.jpg" alt="Rooms" title="Rooms" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1666">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/16/06.jpg"><img src="images/16/06.jpg" alt="Rooms" title="Rooms" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1666">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/16/07.jpg"><img src="images/16/07.jpg" alt="Rooms" title="Rooms" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="item-photo element col-sm-3 col-xs-6 filter-gallery-1666">
                                                            <div class="inner">
                                                                <a class="fancybox" data-fancybox-group="gallery" href="images/16/08.jpg"><img src="images/16/08.jpg" alt="Rooms" title="Rooms" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </article>

                    </main>
                </div>
            </div>
        </section>

        <div>

       
            
        </div>
    </div>
    </div>
    </div>
    <script type='text/javascript' src="js/main.minc5bc.js"></script>
    <script type='text/javascript' src="js/custom-script.minc5bc.js"></script>
</body>
</html>