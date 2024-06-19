<?php get_header();?>

<div id="hero">
    <div class="container-full-width">
        <div class="swiper swiper-hero">
            <div class="swiper-wrapper">
                <?php 
                    if(have_rows('hero_banner')):
                        while(have_rows('hero_banner')): the_row();
                            $bg = get_sub_field('image_slider');
                            $title = get_sub_field('libelle');
                            $link = get_sub_field('lien');?>

                            <div class="swiper-slide" style="background-image:url('<?php echo $bg['url'];?>')";>
                                <a href="<?php echo $link['url'];?>">
                                    <?php echo $title;?>
                                </a>
                            </div>
                        <?php endwhile;
                    endif;
                ?>
            </div>
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<?php get_template_part( 'templates-parts/section-introduction');?>
<?php get_template_part( 'templates-parts/section-nos-qualites');?>
<?php get_template_part( 'templates-parts/section-showroom');?>
<?php get_template_part( 'templates-parts/section-inspirations');?>

<?php get_template_part( 'templates-parts/section-blog');?>
<?php get_template_part( 'templates-parts/section-contact');?>

<?php get_footer();?>