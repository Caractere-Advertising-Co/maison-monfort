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

            if($prevPost):
                $prev_post_id = $prevPost->ID;
            else :
                $abjacent_categories = get_the_category(); 
                $ids = array();
            
                foreach($abjacent_categories as $category) {
                    $ids[] = $category->term_id;
                }
                
                $last = new WP_Query( array( 
                    'post_type' => 'post',
                    'posts_per_page' => 1, 
                    'orderby'         => 'post_date',
                    'order'           => 'DESC',
                    'category__in' => $ids, 
                )); 

                $last->the_post(); 
                $prev_post_id = get_the_ID();

                wp_reset_query();
            endif;
            
            if($prev_post_id) :?>
                <div class="colg">
                    <?php
                        $title = get_the_title($prev_post_id);
                        $textPrev = get_the_excerpt($prev_post_id);
                        $cta = get_permalink($prev_post_id);
                        //$prevthumbnail = get_the_post_thumbnail($prevPost->ID, array(100,100) ); ?>
                    
                    <?php echo '<a href="'.$cta.'" class="ctaTitle"><h3>'.$title .'</h3></a><p>'  .substr($textPrev,0,150) . '...</p>';?>
                    <?php echo '<a href="'.$cta.'" class="cta">Lire plus    </a>';?>
                </div>
            <?php endif;

            if($nextPost):
                $next_post_id = $nextPost->ID;
            else :
                $abjacent_categories = get_the_category(); 
                $ids = array();
            
                foreach($abjacent_categories as $category) {
                    $ids[] = $category->term_id;
                }
                
                $last = new WP_Query( array( 
                    'post_type' => 'post',
                    'posts_per_page' => 1, 
                    'orderby'         => 'post_date',
                    'order'           => 'ASC',
                    'category__in' => $ids, 
                )); 

                $last->the_post(); 
                $next_post_id = get_the_ID();

                wp_reset_query();
            endif;

            if($next_post_id) : ?>
                <div class="cold">
                    <?php
                        $title = get_the_title($next_post_id);
                        $textNext = get_the_excerpt($next_post_id);
                        $cta = get_permalink($next_post_id);
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