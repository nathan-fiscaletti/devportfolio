<?php

if ( basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]) ) { 
    header("Location: ./");
} else {
    return [
        0 => [
            'name' => 'Synful',
            'description' => 'A versatile PHP framework for you to create your own API with ease.',
            'http' => 'https://git.nathanf.tk/synful/wiki',
            'image' => 'images/SynfulLogo.jpg',
        ],
        1 => [
            'name' => 'JTwoD',
            'description' => 'A 2D Java game engine written on top of AWT.',
            'http' => 'http://git.nathanf.tk/jtwod',
            'image' => 'images/JtwoDLogo.jpg',
        ],
        2 => [
            'name' => 'Extended Arrays',
            'description' => 'A PHP library offering improved array management.',
            'http' => 'http://git.nathanf.tk/extended-arrays',
            'image' => 'images/ExtendedArrayLogo.jpg',
        ],
        3 => [
            'name' => 'Parameter-Parser',
            'description' => 'A PHP library for parsing command line parameters.',
            'http' => 'http://git.nathanf.tk/parameterparser',
            'image' => 'images/ParameterParserLogo.png',
        ],
        4 => [
            'name' => 'FreeGeoIp for PHP',
            'description' => 'FreeGeoIp for PHP is a simple library used to interface with any freegeoip API.',
            'http' => 'http://git.nathanf.tk/freegeoip-php',
            'image' => 'images/FreeGeoIpPhpLogo.jpg',
        ],
    ];
}