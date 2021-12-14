<?php
 return [
     'default' => 'comum',
     'connections' => [
         'comum' => [
             'driver'    => env('DB_CONNECTION'),
             'host'      => env('DB_HOST'),
             'port'      => env('DB_PORT'),
             'database'  => env('DB_DATABASE'),
             'username'  => env('DB_USERNAME'),
             'password'  => env('DB_PASSWORD'),
             'charset'   => env('DB_CHARSET', 'utf8'),
             'collation' => env('DB_COLLATION', 'utf8_unicode_ci'),
         ],
         'sigaa' => [
             'driver'    => env('DB_CONNECTION'),
             'host'      => env('DB_HOST'),
             'port'      => env('DB_PORT'),
             'database'  => env('DB_DATABASE_SIGAA'),
             'username'  => env('DB_USERNAME'),
             'password'  => env('DB_PASSWORD'),
             'charset'   => env('DB_CHARSET', 'utf8'),
             'collation' => env('DB_COLLATION', 'utf8_unicode_ci'),
         ],
     ]
 ];

