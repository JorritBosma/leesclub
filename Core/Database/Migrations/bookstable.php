<?php

return
    [
        // Name of the scheme
        'table_name' => 'books',

        // Query to drop the scheme
        'drop_scheme' => "DROP TABLE IF EXISTS `books`",

        // The scheme
        'scheme' => "CREATE TABLE `books` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            `author_full_name` varchar(255) NOT NULL,
            `title` varchar(255),
            `length` int(5),
            `published_in` int(11),
            `finished_reading` tinyint DEFAULT 1,
            `finished_date` date,
            `created` timestamp DEFAULT CURRENT_TIMESTAMP,
            `updated` timestamp DEFAULT CURRENT_TIMESTAMP,
            `deleted` timestamp,
            `created_by` int(11) NOT NULL DEFAULT 1,
            `updated_by` int(11),
            `deleted_by` int(11),
            PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;",

        // Seeder data goes here
        'seeder' =>
        [
            'type' => 'array',
            'data' => array(
                [
                    'author_full_name' => "Bervoets, Hanna",
                    'title' => "Welkom in het Rijk der Zieken",
                    'length' => 280,
                    'published_in' => 2019,
                    'finished_date' => "2020-08-27"
                ],
                [
                    'author_full_name' => "Camus, Albert",
                    'title' => "De pest",
                    'length' => 243,
                    'published_in' => 1947,
                    'finished_date' => "2020-09-02"
                ],
                [
                    'author_full_name' => "Veronesi, Sandro",
                    'title' => "De kolibrie",
                    'length' => 333,
                    'published_in' => 2020,
                    'finished_date' => "2020-09-14"
                ],
                [
                    'author_full_name' => "Diop, David",
                    'title' => "Meer dan een broer",
                    'length' => 154,
                    'published_in' => 2018,
                    'finished_date' => "2020-09-24"
                ],
                [
                    'author_full_name' => "Swift, Graham",
                    'title' => "Mothering Sunday",
                    'length' => 149,
                    'published_in' => 2016,
                    'finished_date' => "2020-07-01"
                ],
                [
                    'author_full_name' => "Costello, Mary",
                    'title' => "Academy Street",
                    'length' => 137,
                    'published_in' => 2014,
                    'finished_date' => "2020-10-11"
                ],
                [
                    'author_full_name' => "Krasznahorkai, László",
                    'title' => "Baron Wenckheim keert terug",
                    'length' => 496,
                    'published_in' => 2016,
                    'finished_date' => "2020-10-14"
                ],
                [
                    'author_full_name' => "King, Stephen",
                    'title' => "De Shining",
                    'length' => 544,
                    'published_in' => 1977,
                    'finished_date' => "2020-12-22"
                ],
                [
                    'author_full_name' => "Pamuntjak, Laksmi",
                    'title' => "Amba of de kleur van rood",
                    'length' => 388,
                    'published_in' => 2012,
                    'finished_date' => "2021-01-01"
                ],
                [
                    'author_full_name' => "King, Stephen",
                    'title' => "Rage (under alias Bachman)",
                    'length' => 166,
                    'published_in' => 1977,
                    'finished_date' => "2021-01-05"
                ],
                [
                    'author_full_name' => "King, Stephen",
                    'title' => "Night shift",
                    'finished_reading' => 0,
                ],
                [
                    'author_full_name' => "Peeters, Hagar",
                    'title' => "Malva",
                    'finished_reading' => 0,
                ],
                [
                    'author_full_name' => "Grunberg, Arnon",
                    'title' => "Moedervlekken",
                    'finished_reading' => 0,
                ],
                [
                    'author_full_name' => "Binet, Laurent",
                    'title' => "Beschaving",
                    'finished_reading' => 0,
                ],
                [
                    'author_full_name' => "Blees, Gerda",
                    'title' => "Wij zijn licht",
                    'finished_reading' => 0,
                ],
            )
        ]
    ];
