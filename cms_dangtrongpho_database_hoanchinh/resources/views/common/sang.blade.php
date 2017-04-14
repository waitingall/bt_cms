	<div class='type-9'>
            <div class='container'>
                <div class='row'>
				
                    <!--COL 1-->
                    <p style="height: 200px"></p>
                    <?php foreach($blogsang as $blogsangs) { ?>
                    <div class='col-md-4 col-1 class_<?php echo $blogsangs->id; ?>'>
                        <p style="height: 200px"></p>
                        <h4><?php echo $blogsangs->title; ?></h4>
                        <p><?php echo $blogsangs->descriptions; ?></p>
                    </div>
                    <?php } ?>
                    
                </div>
            </div>
        </div>