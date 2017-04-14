
<div class='type-1'>
        <div class="container">	 
        	<div class="row r1">
               	   <p1></p1>        	   
                   <p3><img src="images/sushi-icon-3.svg" width="100" height="100"></p3>
            </div>
        
            <div class="row r2">

                <?php foreach($blogthien as $blogthiens) { ?>

                    <div class="col-md-2 col1">
                            <img src="<?php echo $blogthiens->images; ?>" width="170" height="180">
                            <h1 title="Avocado Maki"><?php echo $blogthiens->blog_title; ?></h1>
                            <p><?php echo $blogthiens->blog_contents; ?></p>
                    </div>

                <?php } ?>

                
            </div>
        <div class="footer">
            
            <a href="#">
                <span class="end-footer" data-text="View the full menu">Hiển thị menu</span>
            </a>
        </div>
        <p2></p2>
        </div>
    </div>