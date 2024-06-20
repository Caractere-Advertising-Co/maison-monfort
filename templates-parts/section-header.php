<?php

$banner_header = get_field('banner_header');
$title = get_field('title_header');

?>

<div id="section-header">
    <div class="block-img">
        <?php if($banner_header):?>
            <img src="<?php echo $banner_header['url'];?>" alt="<?php echo $banner_header['name'];?>" />
        <?php endif;?>
    </div>
    <div class="container columns">
        <?php if($title): ?>
            <div class="colg">
                <?php echo $title;?>
            </div>
            <div class="cold"></div>
        <?php endif;?>
    </div>
</div>  