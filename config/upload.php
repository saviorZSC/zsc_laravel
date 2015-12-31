<?php
/**
 * Created by PhpStorm.
 * User: HJKJ
 * Date: 2015/12/15
 * Time: 22:43
 */
return [
    'name' => "Laravel Test",
    'subtitle' => 'A blog written in Laravel 5.1',
    'description' => 'This is study form laravel academy',
    'author' => 'Savior_zsc',
    'page_image' => 'home-bg.jpg',
    'title' => 'My blog',
    'posts_per_page' => 10,
    'rss_size' => 25,
    'contact_email' => env('MAIL_FROM'),
    'uploads' =>[
        'storage' =>'local',
        'webpath' =>'/uploads',
    ],
];