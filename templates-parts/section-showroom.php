<?php 

$banner = get_field('separateur','options');
$title  = get_field('titre_showroom','options');
$texte = get_field('texte_showroom','options');
$img = get_field('img_showroom','options');
$cta = get_field('cta_showroom','options');

?>

<div id="section-showroom">
    <?php if($banner):?>
        <div class="block-img separator">
            <img src="<?php echo $banner['url'];?>" alt="<?php echo $banner['title'];?>" class="fixed"/>
        </div>
    <?php endif;?>
    <div class="container columns">
        <div class="colg">
            <span class="from-left"><?php if($title): echo $title; endif;?></span>
            <?php if($img): echo "<div class=\"block-img from-left\"><img src=\"".$img['url']."\" alt=\"".$img['title']."\"/></div>"; endif;?>
        </div>

        <div class="cold from-bottom">
            <?php if($texte): echo $texte; endif;?>
            <?php if($cta): echo "<a href=\"".$cta['url']."\" class=\"cta\">".$cta['title']."</a>"; endif;?>
        </div>
    </div>
</div>
