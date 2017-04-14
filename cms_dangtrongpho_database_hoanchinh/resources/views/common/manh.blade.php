
		  <div class='type-11'>
            <div class='container'>
                <div class="sep-text">
                    <div class="sep-text-before"><div class="sep-text-line"></div></div>
                    <div class="content">
                        <h2 class="text-divider-double">
                            Ngoài ra chúng tôi còn có
                        </h2>
                        <div class="text-divider-subtitle">Đặc biệt hôm nay</div>
                    </div>
                    <div class="sep-text-after"><div class="sep-text-line"></div></div>
                </div>
                <div style="text-align: center">
                    <div class='row'>
                        <!--COL 1-->
                        <?php foreach($blogmanh as $blogmanhs) { ?>
                        <div class='col-md-2-5'>
                            <div class="thumbnail">
                                <a href="/" title="Coffee &amp; Tea" class="has-border">
                                    <img width="300" height="300" src="<?php echo $blogmanhs->images; ?>" alt=""> </a>
                            </div>
                            <h4 class="services-title">
                                <a href="/" title="Coffee &amp; Tea"><?php echo $blogmanhs->title; ?></a>
                            </h4>
                            <div class="services-content">
                                <p><?php echo $blogmanhs->descriptions; ?></p>
                            </div>
                        </div>
                        <?php } ?>
                        
                        
                    </div>
                </div>
            </div>
        </div>
		