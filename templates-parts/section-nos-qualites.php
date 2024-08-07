<?php 

$titre = get_field('titre_qualite','options');
$cta = get_field('cta_qualites','options');
?>

<div id="section-nos-qualites">
    <div class="container">
        <?php if($titre): echo $titre; endif;?>
    </div>

    <div class="container grid">
        <?php if(have_rows('qualites','options')):
            while(have_rows('qualites','options')): the_row();
                $img = get_sub_field('image');
                $txt = get_sub_field('texte');?>

                <div class="card from-right">
                    <div class="block-img">
                        <img src="<?php if($img): echo $img['url'];endif;?>" alt="<?php if($img): echo $img['title'];endif;?>" />
                    </div>

                    <div class="descr">
                        <?php if($txt): echo $txt; endif;?>
                    </div>
                </div>
            <?php endwhile;
        endif;?>
    </div>

    <div class="container">
        <?php if($cta):?>
            <a href="<?php echo $cta['url'];?>" class="cta"><?php echo $cta['title'];?></a>
        <?php endif;?>
    </div>
</div>