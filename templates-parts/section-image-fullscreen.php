<?php

$background = get_field('background-fullscreen');
$texte = get_field('texte_fullscreen');

?>

<div id="section-fullscreen" <?php if($background):?>style= "background-image:url('<?php echo $background['url'];?>');"<?php endif;?>>
    <div class="container columns">
        <div class="colg from-bottom">
            <?php if($texte): echo $texte; endif;?> 
        </div>
        <div class="cold"></div>
    </div>
</div>