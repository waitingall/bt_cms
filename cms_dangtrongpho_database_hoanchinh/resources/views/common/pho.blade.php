   <div class='type-7'>
            <div class='container'>
                <div style="text-align: center">
                    <img src="images/sushi-icon-5.svg" height="250px">
                </div>
                <div class='row'>
                    <!--COL 1-->
                    <div class='col-md-4'>
                        <div style="height: 50px"></div>
                        <h4 style="text-align: center;">Thời gian mở cửa</h4>
                        <table class="opening-time-table">
                            <tbody>
                            <?php foreach($listDatePho as $listDatePhos)  { ?>
                                <tr>
                                    <td><?php echo $listDatePhos->title; ?></td>
                                    <td></td>
                                    <td><?php echo $listDatePhos->times; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!--COL 2-->
                    <div class='col-md-4'>
                        <div class="directions">
                            <div style="text-align: center"> 
                                <img src="images/icon-view.png">
                            </div>
                            <h4 style="text-align: center;"><?php echo $title; ?></h4>
                            <p style="text-align: center;">
                               <?php echo $contents; ?>
                            </p>
                            <div style="height: 5px"></div>
                            <p style="text-align: center">
                                <a href="<?php echo $url; ?>" target="_blank" style="font-size: 13px;" class="view-button hover-accent1 ">
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
                <div style="text-align: center">
                    <img src="images/photo-sushi-7.jpg" height="400px">
                </div>
            </div>
        </div>

    