<div class="trackListTitle">
    <?php $product->renderIMG(); ?>
    <h4 class="trackListTitle">Tracklist</h4>
</div>
<div class="trackList" style="display: none">
    <?php
    $i = 1;
    foreach($trackListLITD as $track){
        echo "<p class=\"track\">$i. $track[0] - <span class='italic'>$track[1]</span></p>";
        $i++;
    }
    ?>
</div>