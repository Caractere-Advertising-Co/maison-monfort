<div class="container-full-width">
    <?php 
        $logo = get_field('logo','options');

        if($logo):
            echo "<img class='logo' src='".$logo['url']."' alt='".$logo['name']."'/>";
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