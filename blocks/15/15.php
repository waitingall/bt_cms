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
        $less->compileFile('less/15.less', 'css/15.css');
        ?>
        <link href="css/15.css" rel="stylesheet" type="text/css" />

    </head>

    <body>


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
                        <div class="today-specials-menu">
                            <h3 class="" title="Antioxidant Fruits Mix">Antioxidant Fruits Mix
                                <span class="today-specials-price">$8</span>
                            </h3>
                            <div class="today-specials-description">
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Blueberry banana pancakes">Blueberry banana pancakes
                                <span class="today-specials-price">$5</span>
                            </h3>
                            <div class="today-specials-description">
                                Banana, almond milk, vanilla, cinnamon, blueberry topping
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Fig and lemon cake">Fig and lemon cake
                                <span class="today-specials-price">$7</span>
                            </h3>
                            <div class="today-specials-description">
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Antioxidant Fruits Mix">Home made bread
                                <span class="today-specials-price">$3 Each</span>
                            </h3>
                            <div class="today-specials-description">
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Blueberry banana pancakes">Pain au chocolat
                                <span class="today-specials-price">$4</span>
                            </h3>
                            <div class="today-specials-description">
                                Beautiful homemade croissants, each containing a bar of high-quality dark chocolate,
                                make for an impressive and indulgent addition to ..
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Fig and lemon cake">Sun-Dried Tomato Bruschetta
                                <span class="today-specials-price">$7</span>
                            </h3>
                            <div class="today-specials-description">
                                <h3 class="" title="Fig and lemon cake">Traditional pancakes with maple syrup butter & berry jam
                                <span class="today-specials-price">$5</span>
                            </h3>
                            </div>
                        </div>
                    </div>
                    <!--COL 2-->
                    <div class='col-md-4'>
                        <h2 class="title_menu">
                            Dinner
                        </h2>
                        <div class="today-specials-menu">
                            <h3 class="" title="Alder Grilled Chinook Salmon">Alder Grilled Chinook Salmon
                                <span class="today-specials-price">$33</span>
                            </h3>
                            <div class="today-specials-description">
                                Candied salmon, basil potato puree, baby kale marsala eggplant confit & balsamic butter sauce.
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Alder grilled seafood paella">Alder grilled seafood paella
                                <span class="today-specials-price">$37</span>
                            </h3>
                            <div class="today-specials-description">
                                Shell-on king prawns, monkfish, onion, paella rice, garlic, smoked paprika, cayenne pepper (optional), saffron, tomatoes, mussels, peas, broad beans, ...
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Asian chicken & vegetable stir fry">Asian chicken & vegetable stir fry
                                <span class="today-specials-price">$41</span>
                            </h3>
                            <div class="today-specials-description">
                                Chicken breast, cornstarch, soy sauce, garlic, minced, potatoes, onion, bell pepper, carrot, green beans (aka Baguio beans)
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Creamy smoked salmon, leek & potato soup">Creamy smoked salmon, leek & potato soup
                                <span class="today-specials-price">$9.5</span>
                            </h3>
                            <div class="today-specials-description">
                                Served in deep bowls with smoked salmon and snipped chives on the top.
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Head on prawns, manila clams & mussels">Head on prawns, manila clams & mussels
                                <span class="today-specials-price">$39</span>
                            </h3>
                            <div class="today-specials-description">
                                These small shellfish have a sweet flavour and a firm texture.
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Lamb Chops Sizzled with Garlic">Lamb Chops Sizzled with Garlic
                                <span class="today-specials-price">$45</span>
                            </h3>
                            <div class="today-specials-description">
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Smoked Paprika Hummus">Smoked Paprika Hummus
                                <span class="today-specials-price">$19</span>
                            </h3>
                            <div class="today-specials-description">
                                Optional garnishes: roasted red bell peppers, roasted garlic, lemon slices, olives, mint or parsley sprigs
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Spicy Vegan Potato Curry">Spicy Vegan Potato Curry
                                <span class="today-specials-price">$28</span>
                            </h3>
                            <div class="today-specials-description">
                                Onion, garlic, turmeric, cumin, coriander, tomato, potato, carrot, red pepper, chili, coconut milk.
                            </div>
                        </div>
                    
                    </div>
                    <!--COL 3-->
                    <div class='col-md-4'>
                        <h2 class="title_menu">
                            Dessert
                        </h2>
                        <div class="today-specials-menu">
                            <h3 class="" title="Antioxidant Fruits Mix">Antioxidant Fruits Mix
                                <span class="today-specials-price">$8</span>
                            </h3>
                            <div class="today-specials-description">
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Berries and creme tart">Berries and creme tart
                                <span class="today-specials-price">$7</span>
                            </h3>
                            <div class="today-specials-description">
                                Butter crust, vanilla pudding with heavy cream, topping with fresh raspberries, blueberries, cranberry.
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Blueberry banana pancakes">Blueberry banana pancakes
                                <span class="today-specials-price">$5</span>
                            </h3>
                            <div class="today-specials-description">
                                Banana, almond milk, vanilla, cinnamon, blueberry topping
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Blueberry Sweet Rolls with Lemon Glaze">Blueberry Sweet Rolls with Lemon Glaze
                                <span class="today-specials-price">$7</span>
                            </h3>
                            <div class="today-specials-description">
                                Butter, blueberries, lemon, heavy cream - an irresistible sweet-sour combination of tastes.
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Chocolate Cherry Cake with Meringue Butter Cream">Chocolate Cherry Cake with Meringue Butter Cream
                                <span class="today-specials-price">$8</span>
                            </h3>
                            <div class="today-specials-description">
                               Vanilla, milk, dark chocolate, cherries, eggs, butter
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Creamy mascarpone cake with passion fruit sauce">Creamy mascarpone cake with passion fruit sauce
                                <span class="today-specials-price">$7</span>
                            </h3>
                            <div class="today-specials-description">
            
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Fig and lemon cake">Fig and lemon cake
                                <span class="today-specials-price">$7</span>
                            </h3>
                            <div class="today-specials-description">
            
                            </div>
                        </div>
                        <div class="today-specials-menu">
                            <h3 class="" title="Traditional pancakes with maple syrup butter & berry jam">Traditional pancakes with maple syrup butter & berry jam
                                <span class="today-specials-price">$5</span>
                            </h3>
                            <div class="today-specials-description">
                                   Milk, eggs, strawberries, butter, maple syrup
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>