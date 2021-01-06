<?php

return [
    'table_name' => 'users',

    'drop_scheme' => "DROP TABLE IF EXISTS `users`",

    'scheme' => "CREATE TABLE IF NOT EXISTS `users` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `first_name` varchar(80) NOT NULL,
        `prefix` varchar(20),
        `last_name` varchar(80) NOT NULL,
        `email` varchar(255) NOT NULL,
        `password` varchar(255) NOT NULL,
        `role`int(11) NOT NULL,
        `city` varchar(255),
        `province` varchar(255),
        `bio` varchar(510),
        `created` timestamp,
        `updated` timestamp DEFAULT CURRENT_TIMESTAMP,
        `deleted` timestamp,
        `created_by` int(11) NOT NULL,
        `updated_by` int(11),
        `deleted_by` int(11),
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;",

    'seeder' => [
        'type' => 'array',
        'data' => array(
            [
                'first_name' => 'Jorrit',
                'last_name'  => 'Bosma',
                'email'      => 'bosma.jorrit@gmail.com',
                'password'   => password_hash('1Kgalezen!', PASSWORD_DEFAULT),
                'role'       => 1,
                'city'       => 'Nooitgedacht',
                'province'   => 'Drenthe',
                'bio'        => 'Ik ben een literaire veelvraat met een voorliefde voor speculatieve fictie. Deze site heb ik gebouwd om bij te houden welke boeken ik gelezen heb en nog wil lezen.',
                'created'    => date('Y-m-d H:i:s'),
                'created_by' => 1,
            ],

            [
                'first_name' => 'Test',
                'last_name'  => 'Gebruiker',
                'email'      => 'test@testeron.com',
                'password'   => password_hash('1Kgatesten!', PASSWORD_DEFAULT),
                'role'       => 2,
                'city'       => 'Testurodam',
                'province'   => 'Testeringen',
                'bio'        => 'Ik ben dol op het testen van boeken en websites. Mijn favoriete auto is een Ferrari Testarossa.',
                'created'    => date('Y-m-d H:i:s'),
                'created_by' => 1,
            ]
        ),
    ],
];
