<?php

return [
	'mode'                  => 'utf-8',
	'format'                => 'A4',
	'author'                => '',
	'subject'               => '',
	'keywords'              => '',
    'margin-top'              => '0',
    'margin-bottom'              => '0',
    'margin-left'              => '0',
    'margin-right'              => '0',
	'creator'               => 'CDF',
	'display_mode'          => 'fullpage',
	'tempDir'               => base_path('../temp/'),

    'font_path' => base_path('resources/fonts/'),
    'font_data' => [
        "khmerosmoul" => [/* Khmer */
            'R' => "KhmerOSmuol.ttf",
            'useOTL' => 0xFF,
        ],
        "khmerosmoullight" => [/* Khmer */
            'R' => "KhmerOSmuollight.ttf",
            'useOTL' => 0xFF,
        ],
        "khmerosbattambang" => [/* Khmer */
            'R' => "KhmerOSbattambang.ttf",
            'useOTL' => 0xFF,
        ],
    ]
];
