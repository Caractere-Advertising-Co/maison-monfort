<?php 
    $actif = get_field('actif_section_3');
    $galerie = get_field('galerie_section_3');
    $texte = get_field('texte_section_3');
    $cta = get_field('cta_section_3');
?>

<?php if($actif):?>
    <div id="section-contemporain-mirror">
        <div class="swiper swiper-contempo-mirror">
            <div class="swiper-wrapper">
                <?php if($galerie):
                    foreach ($galerie as $g):?>
                        <div class="swiper-slide">
                            <img src="<?php echo $g['url'];?>" alt="<?php echo $g['name'];?>" />
                        </div>
                    <?php endforeach;
                endif;?>
            </div>
            <div class="swiper-button-prev swiper-button-prev-contempo-mirror"></div>
            <div class="swiper-button-next swiper-button-next-contempo-mirror"></div>
        </div>

        <div class="container columns">
            <div class="colg"></div>
            <div class="cold">
                <?php 
                if($texte): echo $texte; endif;
                if($cta):?>
                    <a href="<?php echo $cta['url'];?>" class="cta"><?php echo $cta['title'];?></a>
                <?php endif;?>
            </div>
        </div>
    </div>
<?php endif;?>