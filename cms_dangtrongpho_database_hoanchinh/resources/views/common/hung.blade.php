
		 <div class='type-13'>
            <div class='container'>

                <div class='row'>
                    <!--COL 1-->
                    <div class='col-md-4 col-1'>
                        <p style="height: 400px"></p>
                    </div>
                    <!--COL 2-->
                    <?php foreach($bloghung as $bloghungs) { ?>
                    <div class='col-md-5 col-2'>
                        <h2><?php echo $bloghungs->title; ?></h2>
                        <p><?php echo $bloghungs->descriptions; ?></p>
                    </div>
                    <?php } ?>
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