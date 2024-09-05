<?php 

$titre = get_field('titre_introduction');
$descr_para_1 = get_field('description_introduction_para_1');
$description = get_field('description_introduction');
$cta = get_field('cta_introduction');
$img = get_field('image_introduction');

?>

<?php if($titre || $descr_para_1 || $description): ?>

<div id="section-introduction">
    <div class="container columns">
        <div class="colg from-bottom">
            <?php if($titre): echo $titre; endif;?>
            <?php if($descr_para_1): echo $descr_para_1; endif;?>
            <?php if($img): echo "<div class=\"block-img from-left\"><img src=\"".$img['url']."\" alt=\"".$img['title']."\"/></div>"; endif;?>
        </div>

        <div class="cold from-bottom">
            <?php if($description): echo $description; endif?>
            <?php if($cta): echo "<a href=\"".$cta['url']."\" class=\"cta\">".$cta['title']."</a>"; endif;?>
        </div>
    </div>
</div>

<?php endif;?>