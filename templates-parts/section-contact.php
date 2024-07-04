<?php 

$description = get_field('texte_contact','options');
$formulaire = get_field('formulaire','options');
$banner = get_field('banner-contact','options');

?>

<div id="section-contact">
    <div class="banner">
        <img src="<?php echo $banner['url'];?>" />
    </div>
    <div class="container columns">
        <div class="colg from-left">
            <?php if($description): echo $description; endif;?>
        </div>
        <div class="cold from-right">
            <?php if($formulaire): echo do_shortcode($formulaire); endif;?>
        </div>
    </div>
</div>
