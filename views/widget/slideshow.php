<?php
$view->style('superslides', 'slideshow-widget:app/css/superslides.css');

$view->script('superslides', 'slideshow-widget:app/js/jquery.superslides.js');
$view->script('slideshow-application', 'slideshow-widget:app/js/application.js', ['superslides', 'jquery']);
?>
<div id="stuffTest" style="height: <?= $config['height'] ?>px;">
<div class="loading-container">
    <div class="pulse"></div>
</div>
<div id="slides">
    <ul class="slides-container">
        <?php
            foreach($images as $image):
                ?>
                <li>
                    <img src="<?= $image['src'] ?>" alt="<?= $image['alt'] ?>">
                    <div class="aef">
                        <h1><?= $image['header'] ?></h1>

                        <div class="contrast">
                            <?= $image['text'] ?>
                        </div>
                    </div>
                </li>
                <?php
            endforeach;
        ?>

    </ul>
</div>
</div>