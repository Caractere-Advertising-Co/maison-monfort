<?php 

$actif = get_field('actif-presentation-mirror');
$bg = get_field('background-presentation-mirror');
$texte = get_field('texte-presentation-mirror');
$cta = get_field('cta-presentation-mirror');
$image = get_field('image-presentation-mirror');

?>

<?php if($actif):?>
<div id="section-presentation-mirror" class="from-left">
    <div class="block-img background">
        <?php if($bg):?><img src="<?php echo $bg['url'];?>" alt="<?php echo $bg['name'];?>" /><?php endif;?>
    </div>
    <div class="container columns">
        <div class="colg">
            <div class="block-img from-right">
                <?php if($image):?>
                    <img src="<?php echo $image['url'];?>" alt="<?php echo $image['title'];?>" />
                <?php endif;?>
            </div>
        </div>
        <div class="cold">
            <span class="from-bottom"><?php if($texte): echo $texte; endif;?></span>
            <?php if($cta): echo '<a href='.$cta['url'].' class="cta">'.$cta['title'].'</a>'; endif;?>
        </div>
    </div>
</div>
<?php endif;?>