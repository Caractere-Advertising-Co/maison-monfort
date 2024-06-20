<?php 
/* Template Name: Page simple */

$cta = get_field('cta');
$content = get_field('content');

$text;
if($content):
    $text = $content;
else : 
    $text = get_the_content();
endif;
get_header();?>

<div id="page-simple">
    <div class="container">
        <?php echo $text;?>
        <?php if($cta):?>
            <a href="<?php echo $cta['url'];?>" class="cta"><?php echo $cta['title'];?></a>
        <?php endif;?>
    </div>
</div>

<?php get_footer();?>