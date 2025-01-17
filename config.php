<?php

return [
    'name'=>  'Vitayr',
    'description'=>  'version <= [1.7.3]',
    'version'=>  '1.1.3',
    'images'=>  'https=> //assets.imgix.net/unsplash/hotairballoon.jpg?w=1280&amp;h=853&amp;fit=crop&amp;crop=right',
    'configs'=>  [
        [
            'label'=>  '默认语言',
            'placeholder'=>  '请选择默认语言',
            'field_name'=>  'theme_default_i18n',
            'field_type'=>  'select',
            'select_options'=>  [
                'zh-CN'=>  '简体中文',
                'zh-TW'=>  '繁体中文',
                'en-US'=>  'English',
                'ja-JP'=>  '日本語',
                'ko-KR'=>  '한국어',
                'vi-VN'=>  'Tiếng Việt',
                'fa-IR'=>  'فارسی'
            ],
            'default_value'=>  'zh-CN'
        ],
        [
            'label'=>  '主题色',
            'placeholder'=>  '请选择主题颜色',
            'field_name'=>  'theme_color',
            'field_type'=>  'input',
            'default_value'=>  '#3b5998'
        ],
        [
            'label'=>  '自定义页脚(实现客服JS代码插入等)',
            'placeholder'=>  '自定义js代码',
            'field_name'=>  'custom_html',
            'field_type'=>  'textarea'
        ]
    ]
];
