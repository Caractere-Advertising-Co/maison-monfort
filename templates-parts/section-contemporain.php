<?php 
    $galerie = get_field('galerie_section_2');
    $texte = get_field('texte_section_2');
?>

<div id="section-contemporain">
    <div class="swiper swiper-contempo">
        <div class="swiper-wrapper">
            <?php if($galerie):
                foreach ($galerie as $g):?>
                    <div class="swiper-slide">
                        <img src="<?php echo $g['url'];?>" alt="<?php echo $g['name'];?>" />
                    </div>
                <?php endforeach;
            endif;?>
        </div>
        <div class="swiper-button-prev swiper-button-prev-contempo"></div>
        <div class="swiper-button-next swiper-button-next-contempo"></div>
    </div>

    <div class="container columns">
        <div class="colg">
            <?php if($texte): echo $texte; endif;?>
        </div>
        <div class="cold"></div>
    </div>
</div>