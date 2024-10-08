<?php 

$cttCol1   = get_field('description-footer','options');
$cttCol2   = get_field('horaires','options');
$cttCol3   = get_field('infos_contact_footer','options');

$copyright = get_field('copyright','options');
$cookies   = get_field('cookies','options');
$conf      = get_field('confidentialites','options');

// Responsive

$cttCol1Resp   = get_field('description-footer_resp','options');
$cttCol2Resp   = get_field('horaires_resp','options');
$cttCol3Resp   = get_field('infos_contact_footer_resp','options');

?>

<footer>
    <div class="container">
        <div class="footer-top no-mobile">
            <div class="col general-infos">
                <?php $logo = get_field('logo_negatif','options');?>
                
                <?php if($logo):?>
                    <div class="logo-footer">
                        <img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['title'];?>" />
                    </div>
                <?php endif;?>
                
                <?php if($cttCol1): echo $cttCol1; endif;?>
            </div>

            <div class="col col-2">
                <?php if($cttCol2): echo $cttCol2;endif;?>
            </div>

            <div class="col rs_footer">
                <?php if($cttCol3): echo $cttCol3;endif;?>
            </div>
        </div>

        <div class="footer-top no-desktop">
            <div class="col general-infos">
                <?php $logo = get_field('logo_negatif_resp','options');?>
                
                <?php if($logo):?>
                    <div class="logo-footer">
                        <img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['title'];?>" />
                    </div>
                <?php endif;?>
                
                <?php if($cttCol1Resp ): echo $cttCol1Resp ; endif;?>
            </div>

            <div class="col col-2">
                <?php if($cttCol2Resp ): echo $cttCol2Resp ;endif;?>
            </div>

            <div class="col rs_footer">
                <?php if($cttCol3Resp ): echo $cttCol3Resp ;endif;?>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container desktop">
            <?php if($cookies): ?><a href="<?php echo $cookies['url'];?>">Cookies</a><?php endif;?>
            <div><?php if($copyright): echo $copyright; endif;?></div>
            <?php if($conf): ?><a href="<?php echo $conf['url'];?>">Confidentialité</a><?php endif;?>
        </div>

        <div class="container mobile">
            <div class="links">
                <?php if($cookies): ?><a href="<?php echo $cookies['url'];?>">Cookies</a><?php endif;?>
                <?php if($conf): ?><a href="<?php echo $conf['url'];?>">Confidentialité</a><?php endif;?>
            </div>

            <div class="copyright">
                <?php if($copyright): echo $copyright; endif;?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>