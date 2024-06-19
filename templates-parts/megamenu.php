<?php 
$infos = get_field('infos_contact_footer','options');
?>

<div id="megamenu">
    <div class="container-full-width columns">
        <div class="colg">
            <?php wp_nav_menu( array(
                'menu' => 'megamenu',
                'menu_class' => 'megamenu-list'
            ));?>
        </div>
        <div class="cold">
            <?php if($infos): echo $infos; endif;?>
        </div>
    </div>
</div>