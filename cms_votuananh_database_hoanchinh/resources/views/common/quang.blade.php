  <div class='type-10'>
            <div class='container'>
                <div class='row'>
                    <!--COL 1-->
                    <?php foreach($bulidquang as $bulidquangs) { ?>
                   <div class='col-md-6'>
                        <div class='row'>
                            <!--COL 1-->
                            <div class='col-md-5 col-1'>
                                <img src="./images/coffee-photo-1.jpg" width="100%">
                            </div>
                            <!--COL 2-->
                            <div class='col-md-7 col-2'>
                            <div style="text-align: center; padding-top: 15px">
                            <img src="./images/banh.jpg">
                            </div>
                                <h3 style="text-align: center;"><?php echo $bulidquangs->bulid_title ?></h3>
                                <h5 class="today-specials" style="text-align: center;"><?php echo $bulidquangs->    bulid_contents ?></h5>
                                <div class="today-specials-menu">
                                  
                                    <div class="today-specials-description">
                                    <?php echo $bulidquangs->bulid_descriptions ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <!--COL 2-->
                    
                </div>
            </div>
        </div>