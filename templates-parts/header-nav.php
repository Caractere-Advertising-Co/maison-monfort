<div class="container-full-width">
    <?php 
        $logo = get_field('logo','options');
        $url = get_bloginfo( 'url' );

        if($logo):
            echo "<a href=".$url." class='logo'><img src='".$logo['url']."' alt='".$logo['name']."'/></a>";
        endif;
    ?>  

    <div class="icon-megamenu">
        <div class="three col">
            <div class="hamburger" id="hamburger-12">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
    </div>
 </div>