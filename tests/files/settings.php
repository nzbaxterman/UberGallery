<?php

/**
 * Test application configuration settings.
 */

return [
    'title' => 'Test Gallery',
    'theme' => 'redux',
    'albums' => [
        'test' => [
            'title' => 'Test Album; Please Ignore',
            'thumbnails' => [
                'width' => 320,
                'height' => 240,
                'resize' => 'fit'
            ],
            'pagination' => false,
            'images_per_page' => 24,
            'path' => __DIR__ . '/albums/test'
        ]
    ],
    'cache' => [
        'enabled' => false
    ]
];
