<?php 

/* Template Name: Page Article */

get_header();?>

<?php get_template_part( 'templates-parts/section-header');?>
<?php get_template_part( 'templates-parts/section-introduction');?>
<?php get_template_part( 'templates-parts/section-contemporain');?>
<?php get_template_part( 'templates-parts/section-image-fullscreen');?>

<?php /* PREV | NEXT */ ?>

<div id="navigation-post">
    <div class="container columns">
        <?php
            $prevPost = get_previous_post(true);
            $nextPost = get_next_post( true );
            
            if($prevPost) : ?>
                <div class="colg">
                    <?php
                        $title = get_the_title($prevPost->ID);
                        $text = get_the_content($prevPost->ID);
                        $cta = get_permalink( $prevPost->ID );
                        //$prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100) ); ?>
                    
                    <?php echo '<a href="'.$cta.'" class="cta"><h3>'.$title .'</h3></a>'  .substr($text,0,150) . '...';?>
                    <?php echo '<a href="'.$cta.'" class="cta">Lire plus    </a>';?>
                </div>
            <?php endif; ?>

            <?php if($nextPost) : ?>
                <div class="cold">
                    <?php
                        $title = get_the_title($nextPost->ID);
                        $text = get_the_content($nextPost->ID);
                        $cta = get_permalink( $nextPost->ID );
                        //$prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100) ); ?>
                    
                    <?php echo '<a href="'.$cta.'" class="cta"><h3>'.$title .'</h3></a>'  .substr($text,0,150) . '... <br>';?>
                    <?php echo '<a href="'.$cta.'" class="cta">Lire plus    </a>';?>
                </div>
            <?php endif; ?> 

            <?php
                $pagelist = get_pages('sort_column=menu_order&sort_order=asc');
                $pages = array();
                foreach ($pagelist as $page) {
                $pages[] += $page->ID;
                }

                $current = array_search(get_the_ID(), $pages);
                $prevID = $pages[$current-1];
                $nextID = $pages[$current+1];
                ?>

                <div class="navigation">
                <?php if (!empty($prevID)) { ?>
                <div class="alignleft">
                <a href="<?php echo get_permalink($prevID); ?>"
                title="<?php echo get_the_title($prevID); ?>">Previous</a>
                </div>
                <?php }
                if (!empty($nextID)) { ?>
                <div class="alignright">
                <a href="<?php echo get_permalink($nextID); ?>" 
                title="<?php echo get_the_title($nextID); ?>">Next</a>
                </div>
                <?php } ?>
                </div><!-- .navigation -->
    </div>
</div>

<!--
    <?php get_template_part( 'templates-parts/section-showroom');?>
    <?php get_template_part( 'templates-parts/section-contact');?>
-->

<?php get_footer();?>