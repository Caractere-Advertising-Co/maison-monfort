<?php 

/* Template Name: Contact */


$intro = get_field('accroche_introduction');
$info = get_field('informations-contact');
$form = get_field('formulaire-contact');

?>

<?php get_header();?>

<?php get_template_part( 'templates-parts/section-header');?>
<?php get_template_part( 'templates-parts/section-introduction');?>


<div id="content-contact">
    <div class="container columns">
        <div class="colg">
            <div class="intro-contact">
                <?php if($intro): echo $intro; endif;?>
            </div>
            <div class="infos-contact">
                <?php if($info): echo $info; endif;?>
           </div>
        </div>
        
        <div class="cold">
            <?php if($form): echo do_shortcode( $form); endif;?>
        </div>
    </div>
</div>

<?php get_template_part( 'templates-parts/section-presentation');?>
<?php get_footer();?>