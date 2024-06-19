<?php 

/* Template Name :  Page Article 

*/

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
    </div>
</div>


<?php get_template_part( 'templates-parts/section-showroom');?>
<?php get_template_part( 'templates-parts/section-contact');?>

<?php get_footer();?>