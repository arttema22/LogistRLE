<?php

use App\Models\User;
use MoonShine\Forms\LoginForm;
use MoonShine\MoonShineLayout;
//use MoonShine\Pages\ProfilePage;
use MoonShine\Models\MoonshineUser;
use App\MoonShine\Pages\ProfilePage;
use MoonShine\Http\Middleware\Authenticate;
use MoonShine\Exceptions\MoonShineNotFoundException;
use MoonShine\Http\Middleware\SecurityHeadersMiddleware;

return [
    'dir' => 'app/MoonShine',
    'namespace' => 'App\MoonShine',

    'title' => env('MOONSHINE_TITLE', 'MoonShine'),
    'logo' => env('MOONSHINE_LOGO'),
    'logo_small' => env('MOONSHINE_LOGO_SMALL'),

    'route' => [
        'domain' => env('MOONSHINE_URL', ''),
        'prefix' => env('MOONSHINE_ROUTE_PREFIX', 'admin'),
        'single_page_prefix' => 'page',
        'index' => 'moonshine.index',
        'middlewares' => [
            SecurityHeadersMiddleware::class,
        ],
        'notFoundHandler' => MoonShineNotFoundException::class,
    ],

    'use_migrations' => true,
    'use_notifications' => true,
    'use_theme_switcher' => true,

    'layout' => MoonShineLayout::class,

    'disk' => 'public',

    'disk_options' => [],

    'cache' => 'file',

    'forms' => [
        'login' => LoginForm::class
    ],

    'pages' => [
        'dashboard' => App\MoonShine\Pages\Dashboard::class,
        // 'profile' => ProfilePage::class
        'profile' => ProfilePage::class
    ],

    'model_resources' => [
        'default_with_import' => false,
        'default_with_export' => false,
    ],

    'auth' => [
        'enable' => true,
        'middleware' => Authenticate::class,
        'fields' => [
            'username' => 'email',
            'password' => 'password',
            'name' => 'name',
            'avatar' => 'avatar',
            'phone' => 'phone',
        ],
        'guard' => 'moonshine',
        'guards' => [
            'moonshine' => [
                'driver' => 'session',
                'provider' => 'moonshine',
            ],
        ],
        'providers' => [
            'moonshine' => [
                'driver' => 'eloquent',
                'model' => User::class,
                //'model' => MoonshineUser::class,
            ],
        ],
        'pipelines' => [],
    ],
    'locales' => [
        'en',
        'ru',
    ],

    'global_search' => [
        // User::class
    ],

    'tinymce' => [
        'file_manager' => false, // or 'laravel-filemanager' prefix for lfm
        'token' => env('MOONSHINE_TINYMCE_TOKEN', ''),
        'version' => env('MOONSHINE_TINYMCE_VERSION', '6'),
    ],

    'socialite' => [
        // 'driver' => 'path_to_image_for_button'
    ],
];
