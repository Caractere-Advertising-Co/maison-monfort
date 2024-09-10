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
            $nextPost = get_next_post(true);
            
            if($prevPost) :?>
                <div class="colg">
                    <?php
                        $title = get_the_title($prevPost->ID);
                        $textPrev = $prevPost->post_excerpt;
                        $cta = get_permalink($prevPost->ID);
                        //$prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100) ); ?>
                    
                    <?php echo '<a href="'.$cta.'" class="ctaTitle"><h3>'.$title .'</h3></a><p>'  .substr($textPrev,0,150) . '...</p>';?>
                    <?php echo '<a href="'.$cta.'" class="cta">Lire plus    </a>';?>
                </div>
            <?php endif; ?>

            <?php if($nextPost) : ?>
                <div class="cold">
                    <?php
                        $title = get_the_title($nextPost->ID);
                        $textNext = $nextPost->post_excerpt;
                        $cta = get_permalink($nextPost->ID );
                        //$prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100) ); ?>
                    
                    <?php echo '<a href="'.$cta.'" class="ctaTitle"><h3>'.$title .'</h3></a><p>'.substr($textNext,0,150) . '... </p>';?>
                    <?php echo '<a href="'.$cta.'" class="cta">Lire plus</a>';?>
                </div>
            <?php endif; ?>
    </div>
</div>

<!--
    <?php get_template_part( 'templates-parts/section-showroom');?>
    <?php get_template_part( 'templates-parts/section-contact');?>
-->

<?php get_footer();?>