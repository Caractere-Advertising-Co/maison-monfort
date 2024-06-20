<?php 

$titre = get_field('titre-marque');
$marques = get_field('marques');

?>

<div id="section-marques">
    <div class="container">
        <?php if($titre): echo $titre; endif;?>

        <div class="grid">
        <?php if($marques):
            foreach($marques as $m):
                $img = get_field('logo',$m->ID);
                $link = get_field('lien',$m->ID);?>

                <a href="<?php if($link): echo $link['url']; endif?>">
                    <div class="block-img">
                        <img src="<?php echo $img['url'];?>" alt="<?php echo $img['name'];?>"/>
                    </div>
                </a>
            <?php endforeach;
        endif;?>
        </div>
    </div>
</div>

