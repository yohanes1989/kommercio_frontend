<?php

return [
    'project_machine_name' => 'unique-name',
    'client_name' => 'Filthy rich client',
    'client_subtitle' => 'A little about the rich client',
    'image_styles' => [
        'page_banner' => [
            'w' => 1280,
            'h' => 248,
            'fit' => 'crop',
        ],
        'color_swatch' => [
            'w' => 32,
            'h' => 32,
            'fit' => 'crop',
        ],
        'main_banner' => [
            'w' => 1400,
            'h' => 760,
            'fit' => 'crop',
        ],
        'sub_banner' => [
            'w' => 640,
            'h' => 768,
            'fit' => 'crop',
        ],
        'product_detail' => [
            'w' => 860,
            'h' => 1120,
            'fit' => 'crop',
        ],
        'product_detail_zoom' => [
            'w' => 1720,
            'h' => 2240,
            'fit' => 'crop',
        ],
        'product_thumbnail' => [
            'w' => 480,
            'h' => 720,
            'fit' => 'crop',
        ],
        'mini_product_thumbnail' => [
            'w' => 240,
            'h' => 360,
            'fit' => 'crop',
        ],
        'tiny_square_thumbnail' => [
            'w' => 32,
            'h' => 32,
            'fit' => 'crop',
        ],
        'page_image' => [
            'w' => 800
        ],
        'gallery_image' => [
            'w' => 1600
        ]
    ],
    'enable_delivery_date' => FALSE,
    'enable_delivery_note' => FALSE,
    'enable_store_selector' => FALSE,
    'soonest_delivery_days' => 2,
    'contacts' => [
        'order' => [
            'name' => 'Filthy Rich',
            'email' => 'order@filthy-rich.com'
        ],
        'administrator' => [
            'name' => 'Filthy Rich',
            'email' => 'adminer@filthy-rich.com'
        ],
        'general' => [
            'name' => 'Filthy Rich',
            'email' => 'info@filthy-rich.com'
        ],
    ],
    'processed_order_status' => [\Kommercio\Models\Order\Order::STATUS_PROCESSING],
    'line_item_total_precision' => 2,
    'total_precision' => 2,
    'total_rounding' => 'floor',
    'home_uri' => 'page/1',
    'login_images' => [
        'project/assets/images/login/bg1.jpg',
        'project/assets/images/login/bg2.jpg'
    ],
    'require_billing_information' => false,
    'kommercio_api_token' => 'KOMMERCIO_API_TOKEN',
    'catalog_options' => [
        'limit' => 12,
        'sort_by' => 'newest',
        'sort_dir' => 'ASC',
    ],
    'newsletter' => [
        'default' => 'sendgrid',
        'sendgrid' => [
            'api_key' => 'API_TOKEN',
            'subscriber_groups' => [
                'default' => 'LIST_ID'
            ]
        ]
    ],
    'features' => [
        'cms' => [
            'post' => false
        ],
        'customer' => [
            'customer_group' => true,
        ]
    ]
];
