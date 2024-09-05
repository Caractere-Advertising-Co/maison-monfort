<?php 

$titre = get_field('titre-marque');
$marques = get_field('marques');
$cta = get_field('cta_marques');

?>

<div id="section-marques">
    <div class="container">
        <?php if($titre): echo $titre; endif;?>

        <div class="grid">
        <?php if($marques):
            $i = 0;
            foreach($marques as $m):
                // if($i < 8):
                    $img = get_field('logo',$m->ID);
                    $link = get_field('lien',$m->ID);?>

                    <a href="<?php if($link): echo $link['url']; else: echo "#"; endif;?>" target="_blank" class="from-bottom">
                        <div class="block-img">
                            <img src="<?php echo $img['url'];?>" alt="<?php echo $img['name'];?>"/>
                        </div>
                    </a>
                <?php /*endif;
                $i++;*/
            endforeach;
        endif;?>
        </div>

        <?php if($cta): echo '<a href="'.$cta['url'].'" class="cta from-bottom moreMarques">'.$cta['title'].'</a>'; endif;?>

    </div>
</div>

