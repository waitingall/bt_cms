
<div id="page" class="main-container">

    <div class="limit-wrapper">
        <div class="sep-text single centered">
            <div class="sep-text-before">
                <div class="sep-text-line"></div>
            </div>
            <div class="content">
                <h2 class="text-divider-double">
                    News &amp; Events
                </h2>
                <div class="text-divider-subtitle">Today Specials</div>
            </div>
            <div class="sep-text-after">
                <div class="sep-text-line"></div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="vamtam-grid grid-1-1  vamtam-first-leve">
            <div class="limit-wrapper">
                <div class="extended-column-inner">

                    <div class="row ">
                        <div class="vamtam-grid grid-1-1  grid-1-1  first unextended no-extended-padding" style="padding-top:0.05px;padding-bottom:0.05px;" id="vamtam-column-a6db70bbe74c691e79c3b840a11831a6">
                            <div class="loop-wrapper clearfix news mosaic paginated">
                                <div class="cbp-wrapper-outer">
                                    <div class="cbp-wrapper">

                                    <?php foreach($bloghai as $bloghais) { ?>
                                        <div class="page-content post-header clearboth list-item cbp-item post-298" style="width: 292px; left: 0px; top: 0px;">
                                            <div class="cbp-item-wrapper">
                                                <div>
                                                    <div class="post-article has-image-wrapper ">
                                                        <div class="standard-post-format clearfix as-image ">
                                                            <div class="post-media">
                                                                <div class="thumbnail">
                                                                    <a href="<?php echo $bloghais->url; ?>">
                                                                        <img src="<?php echo $bloghais->images ?>" class="attachment-theme-normal-4 size-theme-normal-4 wp-post-image"> <span class="icon shortcode theme  use-hover" style=""></span> </a>
                                                                    </div>
                                                                </div>
                                                                <div class="post-content-wrapper">
                                                                    <div class="post-content-meta">
                                                                        <div class="vamtam-meta-tax the-categories"><span class="icon theme"></span> <span class="visuallyhidden">Category</span><a href="" r>Recipes</a> <a href="" rel="category tag">Tips &amp; Tricks</a>
                                                                        </div>
                                                                    </div>

                                                                    <div class="post-content-outer">
                                                                        <p><?php echo $bloghais->descriptions; ?></p>
                                                                    </div>


                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <?php } ?>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="load-more clearboth vamtam-pagination-wrapper"><a href="" class="lm-btn vamtam-button button-border accent1 hover-accent6"><span class="btext" data-text="Load more">Load more</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>