<?php 

$titre = get_field('titre_inspirations','options');
$galerie = get_field('galerie_inspi','options');

$cta;

if(is_page(242)):
    $cta = get_field('cta_page_inspi');
else:
    $cta = get_field('cta_inspirations','options');
endif;
?>

<div id="section-inspirations">
    <div class="container from-bottom">
        <?php if($titre): echo $titre; endif;?>
    </div>

    <div class="container-full-width grid">
        <?php if($galerie):
            $i = 0;
            $limit;

            if(is_front_page()):
                $limit = 7;
            else :
                $limit = 100;
            endif;
            
            foreach($galerie as $g):
                if($i < $limit): ?>
                    <a data-fslightbox href="<?php echo $g['url'];?>">
                        <img src="<?php echo $g['url'];?>" alt="<?php echo $g['title'];?>" class="from-bottom"/>
                    </a>
                <?php 
                endif; $i++;
            endforeach;
        endif;?>
    </div>

    <div class="container">
        <?php if($cta):?>
            <a href="<?php echo $cta['url'];?>" class="cta"><?php echo $cta['title'];?></a>
        <?php endif;?>
    </div>
</div>