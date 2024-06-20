<?php 
/* Template Name: Page simple */

$cta = get_field('cta');
$content = get_field('content');

get_header();?>

<div id="simple-page">
    <div class="container">
        <?php if($content): echo $content; endif;?>
        <?php if($cta):?>
            <a href="<?php echo $cta['url'];?>" class="cta"><?php echo $cta['title'];?></a>
        <?php endif;?>
    </div>
</div>



<?php get_footer();?>