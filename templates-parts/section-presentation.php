<?php 

$bg = get_field('background-presentation');
$texte = get_field('texte-presentation');
$cta = get_field('cta-presentation');
$image = get_field('image-presentation');

?>

<div id="section-presentation" class="from-left">
    <div class="block-img background">
        <?php if($bg):?><img src="<?php echo $bg['url'];?>" alt="<?php echo $bg['name'];?>" /><?php endif;?>
    </div>
    <div class="container columns">
        <div class="colg from-left">
            <?php if($texte): echo $texte; endif;?>
            <?php if($cta): echo '<a href='.$cta['url'].' class="cta from-bottom">'.$cta['title'].'</a>'; endif;?>
        </div>
        <div class="cold">
            <div class="block-img from-right">
                <?php if($image):?>
                    <img src="<?php echo $image['url'];?>" alt="<?php echo $image['title'];?>" />
                <?php endif;?>
            </div>  
        </div>
    </div>
</div>