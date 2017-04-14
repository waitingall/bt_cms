<div class='type-15'>
            <div class='container'>
			
                <div class="sep-text">
                    <div class="sep-text-before"><div class="sep-text-line"></div></div>
                    <div class="content">
                        <h2 class="text-divider-double">
                            Menu
                        </h2>
                        <div class="text-divider-subtitle">Today Specials</div>
                    </div>
                    <div class="sep-text-after"><div class="sep-text-line"></div></div>
                </div>
                <div class='row'>
                    <!--COL 1-->
                    <div class='col-md-4'>
                        <h2 class="title_menu">
                            Breakfast
                        </h2>
                        <?php foreach($breakfastthong as $breakfastthongs) { ?>
                        <div class="today-specials-menu">
                            <h3 class="" title="Antioxidant Fruits Mix"><?php echo $breakfastthongs->title; ?>
                                <span class="today-specials-price"><?php echo $breakfastthongs->price; ?></span>
                            </h3>
                            <div class="today-specials-description">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <!--COL 2-->
                    <div class='col-md-4'>
                        <h2 class="title_menu">
                            Dinner
                        </h2>
                       
                        <?php foreach($dinnerthong as $dinnerthongs) { ?>
                        <div class="today-specials-menu">
                            <h3 class="" title="Antioxidant Fruits Mix"><?php echo $dinnerthongs->title; ?>
                                <span class="today-specials-price"><?php echo $dinnerthongs->price; ?></span>
                            </h3>
                            <div class="today-specials-description">
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <!--COL 3-->
                    <div class='col-md-4'>
                        <h2 class="title_menu">
                            Dessert
                        </h2>
                        
                        <?php foreach($dessertthong as $dessertthongs) { ?>
                        <div class="today-specials-menu">
                            <h3 class="" title="Antioxidant Fruits Mix"><?php echo $dessertthongs->title; ?>
                                <span class="today-specials-price"><?php echo $dessertthongs->price; ?></span>
                            </h3>
                            <div class="today-specials-description">
                            </div>
                        </div>
                        <?php } ?>
                       
                    </div>
                </div>
            </div>
        </div>