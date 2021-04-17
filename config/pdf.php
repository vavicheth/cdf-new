<?php

return [
	'mode'                  => 'utf-8',
	'format'                => 'A4',
	'author'                => '',
	'subject'               => '',
	'keywords'              => '',
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
