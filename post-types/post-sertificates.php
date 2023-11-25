<?php

add_action('init', 'register_post_type_sertificates'); // Использовать функцию только внутри хука init

function register_post_type_sertificates()
{
    $labels = array(
        'name' => 'Список сертификатов', // заголовок на странице открытого раздела в админке
        'singular_name' => 'Тип постов для сертификатов', // Назваине типа постов в админке
        'add_new' => 'Добавить элемент',
        'add_new_item' => 'Добавить новый элемент', // заголовок тега <title>
        'edit_item' => 'Редактировать элемент',
        'new_item' => 'Новый элемент',
        'all_items' => 'Все элементы',
        'view_item' => 'Просмотр элемента на сайте',
        'search_items' => 'Искать элементы в бд',
        'not_found' => 'Элементов не найдено.',
        'not_found_in_trash' => 'В корзине нет элементов.',
        'menu_name' => 'Сертификаты' // название ссылки в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => false,
        'menu_icon' => 'dashicons-media-text', // иконка в меню
        'menu_position' => 4, // порядок в меню
        'supports' => array('title', 'custom-fields')
    );
    register_post_type('sertificates', $args);
}
