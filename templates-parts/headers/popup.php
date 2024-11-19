<?php 

$actif = get_field('actif_popup','options');
$texte = get_field('texte_popup','options');
$img   = get_field('image_popup','options');

$lien  = get_field('lien_popup','options');

if($actif):?>
<?php if(current_user_can( 'administrator')):?>
    <div class="modal_popup" id="modal_popup">
        <div class="centerPopup">
            <div class="close_popup" id="close_popup"><svg width="20px" height="20px" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 21.32L21 3.32001" stroke="#aa8453" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3 3.32001L21 21.32" stroke="#aa8453" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></div>
                <?php if($lien): echo '<a href="'.$lien['url'].'">'; endif;?>
                <div class="content_popup">
                    <?php if($img):?><div class="block-img"><img src="<?php echo $img['url'];?>" alt="<?php echo $img['title'];?>"/></div><?php endif;?>
                    <?php if($texte): echo $texte; endif;?>
                <?php if($lien):?></a><?php endif;?>
                </div>
            </div>
        </div>
    </div>
<?php endif;?>
<?php endif;?>