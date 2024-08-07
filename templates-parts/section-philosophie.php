<?php 

$text = get_field('texte_philo');
$img = get_field('image_philo');

$galerie = get_field('galerie_philo');
$cta = get_field('cta_philo');

?>  

<div id="section-philosophie">
    <div class="swiper swiper-philo">
        <div class="swiper-wrapper">
            <?php if($galerie):
                foreach ($galerie as $g):?>
                    <div class="swiper-slide">
                        <img src="<?php echo $g['url'];?>" alt="<?php echo $g['name'];?>" />
                    </div>
                <?php endforeach;
            endif;?>
        </div>
        <div class="swiper-button-prev swiper-button-prev-philo"></div>
        <div class="swiper-button-next swiper-button-next-philo"></div>
    </div>
    
    <div class="container columns">
        <div class="colg"></div>

        <div class="cold from-bottom">
            <?php if($text): echo $text; endif;?>
            <?php if($cta):?>
                <a href="<?php echo $cta['url'];?>" class="cta"><?php echo $cta['name'];?></a>
            <?php endif;?>
        </div>
    </div>
</div>