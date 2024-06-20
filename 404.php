<?php 
/* Template Name: Page 404 */

$cta = get_field('cta');
$content = get_field('content');

get_header();?>

<div id="page-404">
    <div class="container">
        <?php if($content): echo $content; endif;?>
        <?php if($cta):?>
            <a href="<?php echo $cta['url'];?>" class="cta"><?php echo $cta['title'];?></a>
        <?php endif;?>
    </div>
</div>

<?php get_footer();?>