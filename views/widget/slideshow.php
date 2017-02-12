<?php
$view->style('superslides', 'slideshow-widget:app/css/superslides.css');

// TODO: Only load if selected in the config
$view->script('extra-effects-slides', 'slideshow-widget:app/js/jquery.animate-enhanced.js');
$view->script('superslides', 'slideshow-widget:app/js/jquery.superslides.js');
//$view->script('slideshow-application', 'slideshow-widget:app/js/application.js', ['superslides', 'jquery']);
?>
<div id="slideshowWindow" <?php if($config != null): ?> style="height: <?= $config['height'] ?>px;" <?php endif; ?>>
    <div class="loading-container">
        <div class="pulse"></div>
    </div>
    <div id="slides">
        <ul class="slides-container">
            <?php
                foreach($images as $image):
                    if($image == null) continue;
                    ?>
                    <li>
                        <img src="<?= $image['src'] ?>" alt="<?= $image['alt'] ?>">
                        <div class="aef">
                            <?php if(key_exists('header', $image)): ?>
                                <h1><?= $image['header'] ?></h1>
                            <?php endif; ?>

                            <?php if(key_exists('text', $image)): ?>
                                <div class="contrast">
                                    <?= $image['text'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </li>
                    <?php
                endforeach;
            ?>

        </ul>
    </div>
</div>

<script>
    $(function () {
        $('#slides').superslides({
            animation: '<?= key_exists('animation', $config) ? $config['animation'] : 'slide' ?>',
            animation_speed: '<?= key_exists('animation_speed', $config) ? $config['animation_speed'] : 'normal' ?>',
            animation_easing: 'linear',
            play: <?= key_exists('time_interval', $config) ? $config['time_interval'] : 2500 ?>,
            pagination: <?= key_exists('pagination', $config) ? $config['pagination'] : true ?>,
            inherit_height_from: $('#slideshowWindow')
        });
    });
</script>