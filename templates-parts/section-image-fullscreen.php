<?php

$background = get_field('background-fullscreen');
$texte = get_field('texte_fullscreen');
$cta = get_field('cta_fullscreen');

?>

<div id="section-fullscreen" <?php if($background):?>style= "background-image:url('<?php echo $background['url'];?>');"<?php endif;?>>
    <div class="container columns">
        <div class="colg from-bottom">
            <?php if($texte): echo $texte; endif;?>
            <?php if($cta):?>
                <a href="<?php echo $cta['url'];?>"><?php echo $cta['name'];?></a>
            <?php endif;?>
        </div>
        <div class="cold"></div>
    </div>
</div>