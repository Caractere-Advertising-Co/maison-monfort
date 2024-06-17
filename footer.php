<?php 

$cttCol1 = get_field('description-footer','options');
$cttCol2 = get_field('horaires','options');
$cttCol3 = get_field('infos_contact_footer','options');


$copyright = get_field('copyright','options');
$cookies = get_field('cookies','options');
$conf = get_field('confidentialites','options');


?>

<footer>
    <div class="container">
        <div class="footer-top">
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
    </div>
    <div class="footer_bottom">
        <div class="container desktop">
            <a href="">Cookies</a>
            <div>
                <?php 
                    
                    if($copyright): echo $copyright; endif;
                ?>
            </div>
            <a href="">Confidentialité</a>
        </div>

        <div class="container mobile">
            <div class="links">
                <a href="">Cookies</a>
                <a href="">Confidentialité</a>
            </div>

            <div class="copyright">
            <?php 
                    $copyright = get_field('copyright','options');
                    if($copyright): echo $copyright; endif;
                ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>