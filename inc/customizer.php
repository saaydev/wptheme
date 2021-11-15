<?php

add_action('customize_register', function(WP_Customize_Manager $wp_customize){

    $section = "main_settings";
    $wp_customize->add_section($section, 
        [
            "title" => "Общие настройки",
            "description" => "Редактирование настроек",
        ]
    );
    $items = [
        "Телефон"   => "phone",
        "Адрес"     => "address",
    ];
    foreach($items as $key => $item){

        $wp_customize->add_setting($item);
        $wp_customize->add_control($item,
            [
                'label' => $key,
                'section' => $section, 
                'type' => 'text',
            ]
        );
    }
});
