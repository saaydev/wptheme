<?php

add_action('init', function(){

    register_post_type('services',[
		'labels' => [
			'name'               => 'Услуги', 
			'singular_name'      => 'Услуги', 
			'add_new'            => 'Добавить услугу', 
			'add_new_item'       => 'Добавление услуги', 
			'edit_item'          => 'Редактирование услуги', 
			'new_item'           => 'Новая услуга', 
			'view_item'          => 'Смотреть услугу',
			'search_items'       => 'Искать услугу',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'menu_name'          => 'Услуги',
		],
		'public'              => true,
		'menu_icon'           => null,
		'supports'            => ['title', 'editor', 'thumbnail'],
		'has_archive'         => "services",
		'rewrite'             => true,
		'query_var'           => true,
	]);

    register_post_type('news',[
		'labels' => [
			'name'               => 'Новости', 
			'singular_name'      => 'Новости', 
			'add_new'            => 'Добавить новость', 
			'add_new_item'       => 'Добавление новости', 
			'edit_item'          => 'Редактирование новости', 
			'new_item'           => 'Новая новость', 
			'view_item'          => 'Смотреть новость',
			'search_items'       => 'Искать новость',
			'not_found'          => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'menu_name'          => 'Новости',
		],
		'public'              => true,
		'menu_icon'           => null,
		'supports'            => ['title', 'editor', 'thumbnail'],
		'has_archive'         => "news",
		'rewrite'             => true,
		'query_var'           => true,
	]);

    
	register_taxonomy( 'news_cat', [ 'news' ], [
		'labels'                => [
			'name'              => 'Категории',
			'singular_name'     => 'Категория',
			'search_items'      => 'Найти категории',
			'all_items'         => 'Все категории',
			'view_item '        => 'Смотреть категорию',
			'parent_item'       => 'Родительская категория',
			'parent_item_colon' => 'Родительская категория:',
			'edit_item'         => 'Редактировать категорию',
			'update_item'       => 'Обновить категорию',
			'add_new_item'      => 'Добавить категорию',
			'new_item_name'     => 'Новое имя категории',
			'menu_name'         => 'Категории',
		],
		'public'                => true,
		'hierarchical'          => true,
	]);
});