<?php

use Pagekit\Application as App;

return [
    'name' => 'jebster/slideshowWidget',

    'label' => 'Slideshow',

    'events' => [
        'view.scripts' => function ($event, $scripts) use ($app) {

            $scripts->register('widget-slideshow', 'slideshow-widget:app/bundle/widget-slideshow.js', ['~widgets']);
        }
    ],

    'render' => function ($widget) use ($app) {
        $image = $widget->get('image');
        $config = $widget->get('config');

        return $app->view('slideshow-widget/widget/slideshow.php', compact('image', 'config'));
    }
];