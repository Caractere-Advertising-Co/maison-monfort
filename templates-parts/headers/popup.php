<?php 

$actif = get_field('actif_popup','options');
$texte = get_field('texte_popup','options');
$img   = get_field('image_popup','options');

$lien  = get_field('lien_popup','options');

if($actif):?>
<?php if(current_user_can( 'administrator')):?>
    <div class="modal_popup" id="modal_popup">
        <div class="centerPopup">
            <div class="close_popup" id="close_popup"><svg width="20px" height="20px" viewBox="-0.5 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 21.32L21 3.32001" stroke="#02a9d9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M3 3.32001L21 21.32" stroke="#02a9d9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></div>
                <div class="content_popup">
                    <?php if($img):?><div class="block-img"><img src="<?php echo $img['url'];?>" alt="<?php echo $img['title'];?>"/></div><?php endif;?>
                    <?php if($texte): echo $texte; endif;?>
                    <?php if($lien): echo '<a href="'.$lien['url'].'" class="cta-jobs"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4697 5.46967C13.7626 5.17678 14.2374 5.17678 14.5303 5.46967L20.5303 11.4697C20.8232 11.7626 20.8232 12.2374 20.5303 12.5303L14.5303 18.5303C14.2374 18.8232 13.7626 18.8232 13.4697 18.5303C13.1768 18.2374 13.1768 17.7626 13.4697 17.4697L18.1893 12.75H4C3.58579 12.75 3.25 12.4142 3.25 12C3.25 11.5858 3.58579 11.25 4 11.25H18.1893L13.4697 6.53033C13.1768 6.23744 13.1768 5.76256 13.4697 5.46967Z" fill="#ffffff"></path> </g></svg>'.$lien['title'].'</a>'; endif;?>
                </div>
            </div>
        </div>
    </div>
<?php endif;?>
<?php endif;?>