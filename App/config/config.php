<?php

// Array de idiomas permitidos
$langs = ['es', 'eu'];

//Array asociativo (3 nieveles) para determinar las url permitidas y asociarles el recurso de la vista que corresponda
$arrayRutasGet = [
    'es' => [
        '/es' => [
            'view'      => '/views/inicio.php',
            'content'   => 'inicio'
        ],
        
        '/es/restaurador-muebles-madera' => [
            'view'      => '/views/restaurador.php',
            'content'   => 'restaurador'
        ],
        '/es/pintura' => [
            'view'      => '/views/productos.php',
            'content'   => 'pintor'
        ],

        '/es/pintura/pintar-pisos' => [
            'view'      => '/views/producto.php',
            'content'   => 'pisos'
        ],
        '/es/pintura/pintar-balcones-fachadas' => [
            'view'      => '/views/producto.php',
            'content'   => 'balcones'
        ],
        '/es/pintura/tratamientos-humedad' => [
            'view'      => '/views/producto.php',
            'content'   => 'humedad'
        ],


        '/es/contacto' => [
            'view'      => '/views/contacto.php',
            'content'   => 'contacto'
        ],
        '/es/sobre-mi' => [
            'view'      => '/views/quienesSomos.php',
            'content'   => 'quienesSomos'
        ],
        '/es/trabajos-realizados' => [
            'view'      => '/views/expertise.php',
            'content'   => 'expertise'
        ],


        '/es/showroom' => [
            'view'      => '/views/templates.php',
            'content'   => 'templates'
        ],
        // '/es/terminos-legales' => [
        //     'view'      => '/views/terminos.php',
        //     'content'   => 'terminos'
        // ],
        // '/es/gracias' => [
        //     'view'      => '/views/gracias.php',
        //     'content'   => 'gracias'
        // ],
        
        // '/es/zona-admin' => [
        //     'view'      => '/views/zonaAdmin.php',
        //     'content'   => 'zonaAdmin'
        // ],
        // '/es/logout' => [
        //     'view'      => '/views/logout.php',
        //     'content'   => 'logout'
        // ],
        // '/es/registro' => [
        //     'view'      => '/views/logup.php',
        //     'content'   => 'logup'
        // ],
    ],
    'eu' => [
        '/eu' => [
            'view'      => '/views/inicio.php',
            'content'   => 'inicio'
        ],

        '/eu/zurezko-altzarien-zaharberritzailea' => [
            'view'      => '/views/restaurador.php',
            'content'   => 'restaurador'
        ],
        '/eu/margolaria' => [
            'view'      => '/views/productos.php',
            'content'   => 'pintor'
        ],

        '/eu/margolaria/zoruak-margotu' => [
            'view'      => '/views/producto.php',
            'content'   => 'pisos'
        ],
        '/eu/margolaria/balkoiak-eta-fatxadak-margotu' => [
            'view'      => '/views/producto.php',
            'content'   => 'balcones'
        ],
        '/eu/margolaria/hezetasun-tratamenduak' => [
            'view'      => '/views/producto.php',
            'content'   => 'humedad'
        ],

        '/eu/kontaktua' => [
            'view'      => '/views/contacto.php',
            'content'   => 'contacto'
        ],
        '/eu/niri-buruz' => [
            'view'      => '/views/quienesSomos.php',
            'content'   => 'quienesSomos'
        ],
        '/eu/egindako-lanak' => [
            'view'      => '/views/expertise.php',
            'content'   => 'expertise'
        ],


        // '/eu/showroom' => [ 
        //     'view'      => '/views/templates.php',
        //     'content'   => 'templates'
        // ],
        // '/eu/legezko-terminoak' => [
        //     'view'      => '/views/terminos.php',
        //     'content'   => 'terminos'
        // ],
        // '/eu/eskerrik-asko' => [
        //     'view'      => '/views/gracias.php',
        //     'content'   => 'gracias'
        // ],

        // '/eu/admin-gunea' => [
        //     'view'      => '/views/zonaAdmin.php',
        //     'content'   => 'zonaAdmin'
        // ],
        // '/eu/logout' => [
        //     'view'      => '/views/logout.php',
        //     'content'   => 'logout'
        // ],
        // '/eu/erregistroa' => [
        //     'view'      => '/views/logup.php',
        //     'content'   => 'logup'
        // ],
    ]
];

// Array de rutas permitidas para peticiones POST (formularios)
$arrayRutasPost = [
    '/app/artForm' => [
        'view' => '/app/artForm.php',
    ],
    '/app/artFormLogin' => [
        'view' => '/app/artFormLogin.php',
    ],
    '/app/artFormLogup' => [
        'view' => '/app/artFormLogup.php',
    ],
    '/app/artForm01' => [
        'view' => '/app/artForm01.php',
    ],
    '/app/artForm02' => [
        'view' => '/app/artForm02.php',
    ],
];
