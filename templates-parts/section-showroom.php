<?php 

$banner = get_field('separateur','options');
$title  = get_field('titre_showroom','options');
$texte = get_field('texte_showroom','options');
$img = get_field('img_showroom','options');
$cta = get_field('cta_showroom','options');

?>

<div id="section-showroom">
    <div class="block-img separator" <?php if($banner): echo " style=\"background-image:url('".$banner['url']."\" alt=\"".$banner['title']."');\""; endif;?>>
    </div>
    <div class="container columns">
        <div class="colg">
            <span class="from-left"><?php if($title): echo $title; endif;?></span>
            <?php if($img): echo "<div class=\"block-img from-left\"><img src=\"".$img['url']."\" alt=\"".$img['title']."\"/></div>"; endif;?>
        </div>

        <div class="cold from-bottom">
            <?php if($texte): echo $texte; endif;?>
            <?php if($cta): echo "<a href=\"".$cta['url']."\">".$cta['name']."</a>"; endif;?>
        </div>
    </div>
</div>
