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
            `length` int(5) NOT NULL,
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
                    'author_full_name' => "Dick, Phillip K.",
                    'title' => "The Minority Report",
                    'length' => 314,
                    'published_in' => 1956,
                    'finished_date' => "2011-10-20"
                ],
                [
                    'author_full_name' => "Pratchett, Terry",
                    'title' => "Discworld 2: The Light Fantastic",
                    'length' => 216,
                    'published_in' => 1986,
                    'finished_date' => "2011-10-24"
                ],
                [
                    'author_full_name' => "Coetzee, J.M.",
                    'title' => "Waiting for the Barbarians",
                    'length' => 179,
                    'published_in' => 1980,
                    'finished_date' => "2011-10-29"
                ],
                [
                    'author_full_name' => "Huxley, Aldous",
                    'title' => "Crome Yellow",
                    'length' => 174,
                    'published_in' => 1921,
                    'finished_date' => "2011-11-03"
                ],
                [
                    'author_full_name' => "Dick, Phillip K.",
                    'title' => "Do androids dream of electric sheep",
                    'length' => 224,
                    'published_in' => 1968,
                    'finished_date' => "2011-11-10"
                ],
                [
                    'author_full_name' => "Verhulst, Dimitri",
                    'title' => "De intrede van Christus in Brussel",
                    'length' => 192,
                    'published_in' => 2011,
                    'finished_date' => "2011-11-20"
                ],
                [
                    'author_full_name' => "Pamuk, Orhan",
                    'title' => "De witte vesting",
                    'length' => 204,
                    'published_in' => 1986,
                    'finished_date' => "2011-11-30"
                ],
                [
                    'author_full_name' => "Ellis, Brett Easton",
                    'title' => "American Psycho",
                    'length' => 399,
                    'published_in' => 1991,
                    'finished_date' => "2011-12-05"
                ],
                [
                    'author_full_name' => "Krabbé, Tim",
                    'title' => "Marte Jacobs",
                    'length' => 165,
                    'published_in' => 2007,
                    'finished_date' => "2011-12-10"
                ],
                [
                    'author_full_name' => "Theroux, Paul",
                    'title' => "A dead hand: A crime in Calcutta",
                    'length' => 279,
                    'published_in' => 2009,
                    'finished_date' => "2011-12-20"
                ],
                [
                    'author_full_name' => "Dick, Phillip K.",
                    'title' => "A scanner darkly",
                    'length' => 217,
                    'published_in' => 1977,
                    'finished_date' => "2012-01-01"
                ],
                [
                    'author_full_name' => "Holland, Tom",
                    'title' => "Millenium",
                    'length' => 512,
                    'published_in' => 2008,
                    'finished_date' => "2012-01-26"
                ],
                [
                    'author_full_name' => "Fisk, Robert",
                    'title' => "The Great War for Civilisation",
                    'length' => 1392,
                    'published_in' => 2005,
                    'finished_date' => "2011-12-15"
                ],
                [
                    'author_full_name' => "Christie, Agatha",
                    'title' => "Death on the Nile",
                    'length' => 317,
                    'published_in' => 1937,
                    'finished_date' => "2012-02-06"
                ],
                [
                    'author_full_name' => "Rossem, Maarten van",
                    'title' => "Drie oorlogen",
                    'length' => 319,
                    'published_in' => 2007,
                    'finished_date' => "2012-02-24"
                ],
                [
                    'author_full_name' => "Vuijsje, Robert",
                    'title' => "Alleen maar nette mensen",
                    'length' => 286,
                    'published_in' => 2008,
                    'finished_date' => "2012-02-10"
                ],
                [
                    'author_full_name' => "Dis, Adriaan van",
                    'title' => "Leeftocht",
                    'length' => 519,
                    'published_in' => 2007,
                    'finished_date' => "2012-07-04"
                ],
                [
                    'author_full_name' => "Hemingway, Ernest",
                    'title' => "To Have and Have Not",
                    'length' => 205,
                    'published_in' => 1937,
                    'finished_date' => "2012-03-01"
                ],
                [
                    'author_full_name' => "Koch, Herman",
                    'title' => "Zomerhuis met zwembad",
                    'length' => 380,
                    'published_in' => 2011,
                    'finished_date' => "2012-03-04"
                ],
                [
                    'author_full_name' => "Kipling, Rudyard",
                    'title' => "Kim",
                    'length' => 247,
                    'published_in' => 1901,
                    'finished_date' => "2012-03-21"
                ],
                [
                    'author_full_name' => "Buwalda, Peter",
                    'title' => "Bonita Avenue",
                    'length' => 543,
                    'published_in' => 2010,
                    'finished_date' => "2012-04-10"
                ],
                [
                    'author_full_name' => "Lanoye, Tom",
                    'title' => "Heldere hemel",
                    'length' => 92,
                    'published_in' => 2012,
                    'finished_date' => "2012-04-15"
                ],
                [
                    'author_full_name' => "Binet, Laurent",
                    'title' => "HHhH",
                    'length' => 440,
                    'published_in' => 2010,
                    'finished_date' => "2012-04-24"
                ],
                [
                    'author_full_name' => "Mulisch, Harry",
                    'title' => "De diamant",
                    'length' => 274,
                    'published_in' => 1954,
                    'finished_date' => "2012-05-04"
                ],
                [
                    'author_full_name' => "Nesbø, Jo",
                    'title' => "De sneeuwman",
                    'length' => 477,
                    'published_in' => 2009,
                    'finished_date' => "2012-05-08"
                ],
                [
                    'author_full_name' => "Barnes, Julian",
                    'title' => "The Sense of an Ending",
                    'length' => 150,
                    'published_in' => 2011,
                    'finished_date' => "2012-05-12"
                ],
                [
                    'author_full_name' => "Rowling, J.K.",
                    'title' => "Harry Potter and the Prisoner of Azkaban (3)",
                    'length' => 317,
                    'published_in' => 1999,
                    'finished_date' => "2012-05-18"
                ],
                [
                    'author_full_name' => "Birch, Carol",
                    'title' => "Jamrach's Menagerie",
                    'length' => 348,
                    'published_in' => 2011,
                    'finished_date' => "2012-06-04"
                ],
                [
                    'author_full_name' => "Kapuscinski, Riszard",
                    'title' => "Reizen met Herodotos",
                    'length' => 263,
                    'published_in' => 2003,
                    'finished_date' => "2012-07-01"
                ],
                [
                    'author_full_name' => "Pratchett, Terry",
                    'title' => "Discworld 4: Mort",
                    'length' => 511,
                    'published_in' => 1987,
                    'finished_date' => "2012-07-10"
                ],
                [
                    'author_full_name' => "Dickie, John",
                    'title' => "Cosa Nostra: De geschiedenis vd Sic maffia",
                    'length' => 421,
                    'published_in' => 2004,
                    'finished_date' => "2012-08-24"
                ],
                [
                    'author_full_name' => "Koch, Herman",
                    'title' => "Red ons Maria Montanelli",
                    'length' => 163,
                    'published_in' => 1989,
                    'finished_date' => "2012-08-20"
                ],
                [
                    'author_full_name' => "Vonnegut, Kurt Jr.",
                    'title' => "2BR02B",
                    'length' => 10,
                    'published_in' => 1962,
                    'finished_date' => "2012-08-24"
                ],
                [
                    'author_full_name' => "Martin, George R.R.",
                    'title' => "Game of Thrones (1)",
                    'length' => 797,
                    'published_in' => 1996,
                    'finished_date' => "2012-08-28"
                ],
                [
                    'author_full_name' => "Wierenga, Tommy",
                    'title' => "Joe Speedboot",
                    'length' => 210,
                    'published_in' => 2005,
                    'finished_date' => "2012-09-23"
                ],
                [
                    'author_full_name' => "Bolaño, Roberto",
                    'title' => "2666 (4/5 hoofdstukken)",
                    'length' => 633,
                    'published_in' => 2004,
                    'finished_date' => "2012-09-29"
                ],
                [
                    'author_full_name' => "Mulisch, Harry",
                    'title' => "Oude lucht - verhaal De Grens",
                    'length' => 18,
                    'published_in' => 1996,
                    'finished_date' => "2012-10-04"
                ],
                [
                    'author_full_name' => "Hermans, Willem Frederik",
                    'title' => "Het behouden huis",
                    'length' => 36,
                    'published_in' => 1953,
                    'finished_date' => "2012-10-05"
                ],
                [
                    'author_full_name' => "Koch, Herman",
                    'title' => "Denken aan Bruce Kennedy",
                    'length' => 156,
                    'published_in' => 2005,
                    'finished_date' => "2012-10-06"
                ],
                [
                    'author_full_name' => "Verhulst, Dimitri",
                    'title' => "Monoloog van iemand die het gewend werd in zichzel",
                    'length' => 91,
                    'published_in' => 2011,
                    'finished_date' => "2012-10-08"
                ],
                [
                    'author_full_name' => "Pratchett, Terry",
                    'title' => "Discworld 5: Sourcery",
                    'length' => 200,
                    'published_in' => 1988,
                    'finished_date' => "2012-10-12"
                ],
                [
                    'author_full_name' => "Dekkers, Midas",
                    'title' => "Poes",
                    'length' => 145,
                    'published_in' => 2009,
                    'finished_date' => "2012-11-01"
                ],
                [
                    'author_full_name' => "Judt, Tony",
                    'title' => "Postwar",
                    'length' => 1066,
                    'published_in' => 2005,
                    'finished_date' => "2013-09-05"
                ],
                [
                    'author_full_name' => "Valens, Anton",
                    'title' => "Het boek Ont",
                    'length' => 349,
                    'published_in' => 2012,
                    'finished_date' => "2012-10-18"
                ],
                [
                    'author_full_name' => "Voskuil, J.J.",
                    'title' => "Het Bureau 1 - Meneer Beerta",
                    'length' => 546,
                    'published_in' => 1991,
                    'finished_date' => "2012-11-19"
                ],
                [
                    'author_full_name' => "Enter, Stephan",
                    'title' => "Grip",
                    'length' => 183,
                    'published_in' => 2011,
                    'finished_date' => "2012-11-24"
                ],
                [
                    'author_full_name' => "Mansbach, Adam",
                    'title' => "Go the Fuck to Sleep",
                    'length' => 20,
                    'published_in' => 2011,
                    'finished_date' => "2012-11-25"
                ],
                [
                    'author_full_name' => "Vonnegut Jr., Kurt",
                    'title' => "While Mortals Sleep",
                    'length' => 189,
                    'published_in' => 2011,
                    'finished_date' => "2012-12-03"
                ],
                [
                    'author_full_name' => "Smeets, Mart",
                    'title' => "De Lance-factor",
                    'length' => 224,
                    'published_in' => 2011,
                    'finished_date' => "2012-12-10"
                ],
                [
                    'author_full_name' => "Nesbø, Jo",
                    'title' => "The Redbreast",
                    'length' => 455,
                    'published_in' => 2000,
                    'finished_date' => "2013-01-01"
                ],
                [
                    'author_full_name' => "Thomése, P.F.",
                    'title' => "J. Kessels: The Novel",
                    'length' => 222,
                    'published_in' => 2009,
                    'finished_date' => "2013-01-06"
                ],
                [
                    'author_full_name' => "Moravia, Alberto",
                    'title' => "De Conformist",
                    'length' => 288,
                    'published_in' => 1951,
                    'finished_date' => "2013-01-06"
                ],
                [
                    'author_full_name' => "Gladwell, Malcolm",
                    'title' => "Blink",
                    'length' => 164,
                    'published_in' => 2005,
                    'finished_date' => "2013-01-15"
                ],
                [
                    'author_full_name' => "Sagan, Françoise",
                    'title' => "Bonjour Tristesse",
                    'length' => 153,
                    'published_in' => 1954,
                    'finished_date' => "2013-01-15"
                ],
                [
                    'author_full_name' => "McEwan, Ian",
                    'title' => "Sweet Tooth",
                    'length' => 294,
                    'published_in' => 2012,
                    'finished_date' => "2013-01-31"
                ],
                [
                    'author_full_name' => "Manfredi, Valerio Massimo",
                    'title' => "De zoon van de droom - Alexander de Grote I",
                    'length' => 350,
                    'published_in' => 1998,
                    'finished_date' => "2013-02-20"
                ],
                [
                    'author_full_name' => "Thomése, P.F.",
                    'title' => "Het Bamischandaal",
                    'length' => 270,
                    'published_in' => 2012,
                    'finished_date' => "2013-02-23"
                ],
                [
                    'author_full_name' => "Villiers, Gerard de",
                    'title' => "SAS: Gijzeling op Jolo",
                    'length' => 192,
                    'published_in' => 2001,
                    'finished_date' => "2013-02-26"
                ],
                [
                    'author_full_name' => "Amis, Martin",
                    'title' => "Lionel Asbo. State of England",
                    'length' => 276,
                    'published_in' => 2012,
                    'finished_date' => "2013-03-19"
                ],
                [
                    'author_full_name' => "Nesbø, Jo",
                    'title' => "De Vleermuisman",
                    'length' => 378,
                    'published_in' => 2011,
                    'finished_date' => "2013-04-02"
                ],
                [
                    'author_full_name' => "Grunberg, Arnon",
                    'title' => "De man zonder ziekte",
                    'length' => 221,
                    'published_in' => 2012,
                    'finished_date' => "2013-04-05"
                ],
                [
                    'author_full_name' => "Wierenga, Tommy",
                    'title' => "Dit zijn de namen",
                    'length' => 301,
                    'published_in' => 2012,
                    'finished_date' => "2013-04-27"
                ],
                [
                    'author_full_name' => "Weijts, Christiaan",
                    'title' => "Euforie",
                    'length' => 400,
                    'published_in' => 2012,
                    'finished_date' => "2013-04-29"
                ],
                [
                    'author_full_name' => "Villiers, Gerard de",
                    'title' => "SAS: Intriges in Nepal",
                    'length' => 223,
                    'published_in' => 2002,
                    'finished_date' => "2013-05-09"
                ],
                [
                    'author_full_name' => "Thomése, P.F.",
                    'title' => "Vladiwostok!",
                    'length' => 294,
                    'published_in' => 2007,
                    'finished_date' => "2013-05-28"
                ],
                [
                    'author_full_name' => "Peeters, Elvis",
                    'title' => "Dinsdag",
                    'length' => 171,
                    'published_in' => 2012,
                    'finished_date' => "2013-06-10"
                ],
                [
                    'author_full_name' => "Martin, George R.R.",
                    'title' => "A Clash of Kings (GoT 2)",
                    'length' => 883,
                    'published_in' => 2000,
                    'finished_date' => "2012-12-31"
                ],
                [
                    'author_full_name' => "Martin, George R.R.",
                    'title' => "A Storm of Swords (GoT 3)",
                    'length' => 1081,
                    'published_in' => 2000,
                    'finished_date' => "2013-08-20"
                ],
                [
                    'author_full_name' => "Brokken, Jan",
                    'title' => "De vergelding",
                    'length' => 382,
                    'published_in' => 2013,
                    'finished_date' => "2013-09-22"
                ],
                [
                    'author_full_name' => "Guppy, Susha",
                    'title' => "Het geheim van het lachen. Vertellingen uit Perzië",
                    'length' => 256,
                    'published_in' => 2006,
                    'finished_date' => "2013-10-01"
                ],
                [
                    'author_full_name' => "Gerritsen, Esther",
                    'title' => "Dorst",
                    'length' => 216,
                    'published_in' => 2012,
                    'finished_date' => "2013-07-01"
                ],
                [
                    'author_full_name' => "Gerritsen, Esther",
                    'title' => "Bevoorrecht bewustzijn",
                    'length' => 127,
                    'published_in' => 2000,
                    'finished_date' => "2013-10-04"
                ],
                [
                    'author_full_name' => "Mersbergen, Jan van",
                    'title' => "Naar de overkant van de nacht",
                    'length' => 176,
                    'published_in' => 2011,
                    'finished_date' => "2013-10-13"
                ],
                [
                    'author_full_name' => "Vonnegut Jr., Kurt",
                    'title' => "Sirens of Titan",
                    'length' => 192,
                    'published_in' => 1959,
                    'finished_date' => "2013-10-20"
                ],
                [
                    'author_full_name' => "Keulen, Mensje van",
                    'title' => "Liefde heeft geen hersens",
                    'length' => 118,
                    'published_in' => 2012,
                    'finished_date' => "2013-10-25"
                ],
                [
                    'author_full_name' => "Ishiguro, Kazuo",
                    'title' => "The remains of the day",
                    'length' => 168,
                    'published_in' => 1989,
                    'finished_date' => "2013-11-01"
                ],
                [
                    'author_full_name' => "Mulisch, Harry",
                    'title' => "De pupil",
                    'length' => 50,
                    'published_in' => 1987,
                    'finished_date' => "2013-11-03"
                ],
                [
                    'author_full_name' => "Nesbo, Jo",
                    'title' => "De kakkerlak (Harry Hole 2)",
                    'length' => 376,
                    'published_in' => 1998,
                    'finished_date' => "2013-11-13"
                ],
                [
                    'author_full_name' => "Reybrouck, David van",
                    'title' => "Congo. Een geschiedenis.",
                    'length' => 680,
                    'published_in' => 2010,
                    'finished_date' => "2013-12-06"
                ],
                [
                    'author_full_name' => "Godijn, Wouter",
                    'title' => "Hoe ik een beroemde Nederlander werd",
                    'length' => 219,
                    'published_in' => 2013,
                    'finished_date' => "2013-12-12"
                ],
                [
                    'author_full_name' => "Leeuwen,  Joke van",
                    'title' => "Feest van het begin",
                    'length' => 208,
                    'published_in' => 2012,
                    'finished_date' => "2013-12-20"
                ],
                [
                    'author_full_name' => "Pfeijffer, Ilja Leonard",
                    'title' => "La Superba",
                    'length' => 360,
                    'published_in' => 2013,
                    'finished_date' => "2013-12-31"
                ],
                [
                    'author_full_name' => "Meijer, Bart",
                    'title' => "De crisis in het kort",
                    'length' => 143,
                    'published_in' => 2013,
                    'finished_date' => "2013-12-31"
                ],
                [
                    'author_full_name' => "Graeme, Simon",
                    'title' => "The Rosie Project",
                    'length' => 252,
                    'published_in' => 2013,
                    'finished_date' => "2013-12-26"
                ],
                [
                    'author_full_name' => "Williams, John",
                    'title' => "Butcher's Crossing",
                    'length' => 232,
                    'published_in' => 1960,
                    'finished_date' => "2013-12-30"
                ],
                [
                    'author_full_name' => "Murakami, Haruki",
                    'title' => "What I talk about when I talk about running",
                    'length' => 117,
                    'published_in' => 2007,
                    'finished_date' => "2013-12-31"
                ],
                [
                    'author_full_name' => "Martin, George R.R.",
                    'title' => "A Feast for Crows (GoT 4)",
                    'length' => 780,
                    'published_in' => 2005,
                    'finished_date' => "2014-01-26"
                ],
                [
                    'author_full_name' => "Raedts, Peter",
                    'title' => "De ontdekking van de Middeleeuwen",
                    'length' => 432,
                    'published_in' => 2011,
                    'finished_date' => "2014-02-13"
                ],
                [
                    'author_full_name' => "Verhulst, Dimitri",
                    'title' => "De laatkomer",
                    'length' => 140,
                    'published_in' => 2013,
                    'finished_date' => "2014-02-14"
                ],
                [
                    'author_full_name' => "Gelder, Roelof van",
                    'title' => "Naar het aards paradijs (bio Jacob Roggeveen)",
                    'length' => 335,
                    'published_in' => 2012,
                    'finished_date' => "2014-02-18"
                ],
                [
                    'author_full_name' => "Schröder, Allard",
                    'title' => "De dode arm. Een romantisch leven.",
                    'length' => 567,
                    'published_in' => 2013,
                    'finished_date' => "2014-03-01"
                ],
                [
                    'author_full_name' => "Manfredi, Valerio Massimo",
                    'title' => "Alexander de Grote II. Het zand van Amon.",
                    'length' => 383,
                    'published_in' => 2000,
                    'finished_date' => "2014-03-08"
                ],
                [
                    'author_full_name' => "Lanoye, Tom",
                    'title' => "Gelukkige slaven",
                    'length' => 300,
                    'published_in' => 2013,
                    'finished_date' => "2014-03-14"
                ],
                [
                    'author_full_name' => "Moor, Marente de",
                    'title' => "Roundhay, tuinscène",
                    'length' => 336,
                    'published_in' => 2013,
                    'finished_date' => "2014-03-19"
                ],
                [
                    'author_full_name' => "Theunissen, Jeroen",
                    'title' => "De omwegen",
                    'length' => 377,
                    'published_in' => 2013,
                    'finished_date' => "2014-03-28"
                ],
                [
                    'author_full_name' => "Knausgård, Karl Ove",
                    'title' => "Vader (Mijn strijd 1)",
                    'length' => 445,
                    'published_in' => 2010,
                    'finished_date' => "2014-04-02"
                ],
                [
                    'author_full_name' => "Welagen, Robbert",
                    'title' => "Het verdwijnen van Robbert",
                    'length' => 160,
                    'published_in' => 2013,
                    'finished_date' => "2014-04-03"
                ],
                [
                    'author_full_name' => "Verhulst, Dimitri",
                    'title' => "De laatste liefde van mijn moeder",
                    'length' => 236,
                    'published_in' => 2010,
                    'finished_date' => "2014-04-06"
                ],
                [
                    'author_full_name' => "Vestdijk, Simon",
                    'title' => "De nadagen van Pilatus",
                    'length' => 286,
                    'published_in' => 1938,
                    'finished_date' => "2014-04-14"
                ],
                [
                    'author_full_name' => "Valens, Anton",
                    'title' => "Vis",
                    'length' => 143,
                    'published_in' => 2009,
                    'finished_date' => "2014-04-16"
                ],
                [
                    'author_full_name' => "Dick, Philip K.",
                    'title' => "Flow my tears, the policeman said",
                    'length' => 202,
                    'published_in' => 1974,
                    'finished_date' => "2014-04-21"
                ],
                [
                    'author_full_name' => "Mulisch, Harry",
                    'title' => "Het mirakel",
                    'length' => 144,
                    'published_in' => 1955,
                    'finished_date' => "2014-04-25"
                ],
                [
                    'author_full_name' => "Verhulst, Dimitri",
                    'title' => "Dinsdagland",
                    'length' => 174,
                    'published_in' => 2004,
                    'finished_date' => "2014-04-28"
                ],
                [
                    'author_full_name' => "Petterson, Per",
                    'title' => "Twee wegen",
                    'length' => 315,
                    'published_in' => 2012,
                    'finished_date' => "2014-05-03"
                ],
                [
                    'author_full_name' => "Bossenbroek, Martin",
                    'title' => "De Boerenoorlog",
                    'length' => 613,
                    'published_in' => 2012,
                    'finished_date' => "2014-05-19"
                ],
                [
                    'author_full_name' => "Harris, Robert",
                    'title' => "An officer and a spy",
                    'length' => 401,
                    'published_in' => 2014,
                    'finished_date' => "2014-06-10"
                ],
                [
                    'author_full_name' => "Crichton, Michael",
                    'title' => "Jurassic Park",
                    'length' => 397,
                    'published_in' => 1990,
                    'finished_date' => "2014-06-24"
                ],
                [
                    'author_full_name' => "Hayes, Terry",
                    'title' => "I am Pilgrim",
                    'length' => 760,
                    'published_in' => 2012,
                    'finished_date' => "2014-07-20"
                ],
                [
                    'author_full_name' => "Wagendorp, Bert",
                    'title' => "Ventoux",
                    'length' => 250,
                    'published_in' => 2013,
                    'finished_date' => "2014-08-10"
                ],
                [
                    'author_full_name' => "Koestler, Arthur",
                    'title' => "Darkness at Noon",
                    'length' => 158,
                    'published_in' => 1940,
                    'finished_date' => "2014-08-20"
                ],
                [
                    'author_full_name' => "Knausgård, Karl Ove",
                    'title' => "Liefde (Mijn strijd 2)",
                    'length' => 602,
                    'published_in' => 2012,
                    'finished_date' => "2014-09-12"
                ],
                [
                    'author_full_name' => "Wieringa, Tommy",
                    'title' => "Een mooie jonge vrouw",
                    'length' => 93,
                    'published_in' => 2014,
                    'finished_date' => "2014-09-13"
                ],
                [
                    'author_full_name' => "Terrin, Peter",
                    'title' => "Post Mortem",
                    'length' => 283,
                    'published_in' => 2012,
                    'finished_date' => "2014-09-25"
                ],
                [
                    'author_full_name' => "Fagerholm, Monika",
                    'title' => "Het Amerikaanse meisje",
                    'length' => 511,
                    'published_in' => 2004,
                    'finished_date' => "2014-10-13"
                ],
                [
                    'author_full_name' => "Vermes, Timur",
                    'title' => "Er ist wieder da",
                    'length' => 296,
                    'published_in' => 2012,
                    'finished_date' => "2014-10-19"
                ],
                [
                    'author_full_name' => "Wagendorp, Bert",
                    'title' => "Ventoux (voor leesclub)",
                    'length' => 250,
                    'published_in' => 2013,
                    'finished_date' => "2014-10-30"
                ],
                [
                    'author_full_name' => "Powers, Kevin",
                    'title' => "The Yellow Birds",
                    'length' => 147,
                    'published_in' => 2012,
                    'finished_date' => "2014-11-08"
                ],
                [
                    'author_full_name' => "Gerritsen, Esther",
                    'title' => "Roxy",
                    'length' => 213,
                    'published_in' => 2014,
                    'finished_date' => "2014-11-10"
                ],
                [
                    'author_full_name' => "Buruma, Ian",
                    'title' => "Year Zero. A history of 1945",
                    'length' => 390,
                    'published_in' => 2013,
                    'finished_date' => "2014-11-15"
                ],
                [
                    'author_full_name' => "Kulin, Ayşe",
                    'title' => "Vaarwel, Istanbul",
                    'length' => 414,
                    'published_in' => 2007,
                    'finished_date' => "2014-11-23"
                ],
                [
                    'author_full_name' => "Koch, Herman",
                    'title' => "Geachte heer M.",
                    'length' => 339,
                    'published_in' => 2014,
                    'finished_date' => "2014-12-03"
                ],
                [
                    'author_full_name' => "Kundera, Milan",
                    'title' => "De ondraaglijke lichtheid van het bestaan",
                    'length' => 357,
                    'published_in' => 1984,
                    'finished_date' => "2014-12-09"
                ],
                [
                    'author_full_name' => "Marani, Diego",
                    'title' => "Nieuwe Finse grammatica",
                    'length' => 222,
                    'published_in' => 2000,
                    'finished_date' => "2014-12-13"
                ],
                [
                    'author_full_name' => "Middendorp, Peter",
                    'title' => "Vertrouwd Voordelig",
                    'length' => 240,
                    'published_in' => 2014,
                    'finished_date' => "2014-12-16"
                ],
                [
                    'author_full_name' => "Harari, Yuval Noah",
                    'title' => "Sapiens. Een kleine geschiedenis van de mensheid",
                    'length' => 462,
                    'published_in' => 2012,
                    'finished_date' => "2014-12-19"
                ],
                [
                    'author_full_name' => "Gaige, Amity",
                    'title' => "Schroder. A Novel.",
                    'length' => 272,
                    'published_in' => 2013,
                    'finished_date' => "2014-12-23"
                ],
                [
                    'author_full_name' => "Reza, Yasmina",
                    'title' => "Gelukkig de gelukkigen.",
                    'length' => 205,
                    'published_in' => 2013,
                    'finished_date' => "2014-12-24"
                ],
                [
                    'author_full_name' => "Eggers, Dave",
                    'title' => "The Circle",
                    'length' => 497,
                    'published_in' => 2013,
                    'finished_date' => "2014-12-28"
                ],
                [
                    'author_full_name' => "Giesbert, Franz-Olivier",
                    'title' => "De kokkin van Himmler",
                    'length' => 335,
                    'published_in' => 2013,
                    'finished_date' => "2014-12-31"
                ],
                [
                    'author_full_name' => "Bernlef, J.",
                    'title' => "Onbewaakt ogenblik",
                    'length' => 219,
                    'published_in' => 2013,
                    'finished_date' => "2015-01-10"
                ],
                [
                    'author_full_name' => "Beeck, Griet op de",
                    'title' => "Vele hemels boven de zevende",
                    'length' => 232,
                    'published_in' => 2013,
                    'finished_date' => "2015-01-10"
                ],
                [
                    'author_full_name' => "Zweig, Stefan",
                    'title' => "De wereld van gisteren. Herinneringen van een Euro",
                    'length' => 431,
                    'published_in' => 1944,
                    'finished_date' => "2015-01-13"
                ],
                [
                    'author_full_name' => "Nesbo, Jo",
                    'title' => "Nemesis (Zes seconden te laat)",
                    'length' => 341,
                    'published_in' => 2002,
                    'finished_date' => "2015-01-16"
                ],
                [
                    'author_full_name' => "Carrasco, Jesús",
                    'title' => "De vlucht",
                    'length' => 208,
                    'published_in' => 2013,
                    'finished_date' => "2015-01-18"
                ],
                [
                    'author_full_name' => "Münstermann, H.",
                    'title' => "Mischa",
                    'length' => 239,
                    'published_in' => 2013,
                    'finished_date' => "2015-01-24"
                ],
                [
                    'author_full_name' => "Lendering, J. En Bosman A.",
                    'title' => "De rand van het Rijk. De Romeinen en de Lage Lande",
                    'length' => 302,
                    'published_in' => 2010,
                    'finished_date' => "2015-01-28"
                ],
                [
                    'author_full_name' => "Saavedra, Miguel de Cervantes",
                    'title' => "De vernuftige edelman Don Quichot van La Mancha",
                    'length' => 570,
                    'published_in' => 1605,
                    'finished_date' => "2015-02-10"
                ],
                [
                    'author_full_name' => "Petterson, Per",
                    'title' => "Ik vind het best",
                    'length' => 221,
                    'published_in' => 1992,
                    'finished_date' => "2015-02-17"
                ],
                [
                    'author_full_name' => "Calvino, Italo",
                    'title' => "De ridder die niet bestond",
                    'length' => 139,
                    'published_in' => 1960,
                    'finished_date' => "2015-02-20"
                ],
                [
                    'author_full_name' => "Bervoets, Hanna",
                    'title' => "Alles wat er was",
                    'length' => 283,
                    'published_in' => 2013,
                    'finished_date' => "2015-02-25"
                ],
                [
                    'author_full_name' => "Bradbury, Ray",
                    'title' => "Fahrenheit 451",
                    'length' => 106,
                    'published_in' => 1953,
                    'finished_date' => "2015-02-27"
                ],
                [
                    'author_full_name' => "Natsume, Soseki",
                    'title' => "Kokoro. De wegen van het hart",
                    'length' => 271,
                    'published_in' => 1914,
                    'finished_date' => "2015-03-07"
                ],
                [
                    'author_full_name' => "Bulawayo, NoViolet",
                    'title' => "We need new names",
                    'length' => 200,
                    'published_in' => 2013,
                    'finished_date' => "2015-03-13"
                ],
                [
                    'author_full_name' => "Heinlein, Robert",
                    'title' => "All you zombies",
                    'length' => 12,
                    'published_in' => 1958,
                    'finished_date' => "2015-03-13"
                ],
                [
                    'author_full_name' => "Koch, Herman",
                    'title' => "Korte geschiedenis van het bedrog. De verhalen",
                    'length' => 367,
                    'published_in' => 2012,
                    'finished_date' => "2015-03-18"
                ],
                [
                    'author_full_name' => "Beeck, Griet op de",
                    'title' => "Kom hier dat ik u kus",
                    'length' => 382,
                    'published_in' => 2014,
                    'finished_date' => "2015-03-23"
                ],
                [
                    'author_full_name' => "Mercier, Pascal",
                    'title' => "Nachtzug nach Lissabon",
                    'length' => 495,
                    'published_in' => 2004,
                    'finished_date' => "2015-04-05"
                ],
                [
                    'author_full_name' => "Egmond, Michiel van",
                    'title' => "Kieft",
                    'length' => 367,
                    'published_in' => 2014,
                    'finished_date' => "2015-04-06"
                ],
                [
                    'author_full_name' => "Lubach, Arjen",
                    'title' => "Mensen die ik ken die mijn moeder hebben gekend",
                    'length' => 252,
                    'published_in' => 2006,
                    'finished_date' => "2015-04-08"
                ],
                [
                    'author_full_name' => "Nesbø, Jo",
                    'title' => "Dodelijk patroon",
                    'length' => 305,
                    'published_in' => 2003,
                    'finished_date' => "2015-04-20"
                ],
                [
                    'author_full_name' => "Martin, George R.R.",
                    'title' => "A Dance of Dragons (GoT 5)",
                    'length' => 1097,
                    'published_in' => 2011,
                    'finished_date' => "2015-05-08"
                ],
                [
                    'author_full_name' => "Verhulst, Dimitri",
                    'title' => "De zomer hou je ook niet tegen",
                    'length' => 94,
                    'published_in' => 2015,
                    'finished_date' => "2015-05-09"
                ],
                [
                    'author_full_name' => "Hart, Kees 't",
                    'title' => "Teatro Olimpico",
                    'length' => 221,
                    'published_in' => 2014,
                    'finished_date' => "2015-05-10"
                ],
                [
                    'author_full_name' => "Verbeeke, Annelies",
                    'title' => "Dertig dagen.",
                    'length' => 319,
                    'published_in' => 2015,
                    'finished_date' => "2015-05-21"
                ],
                [
                    'author_full_name' => "Coetzee, J.M.",
                    'title' => "The childhood of Jesus",
                    'length' => 229,
                    'published_in' => 2013,
                    'finished_date' => "2015-05-28"
                ],
                [
                    'author_full_name' => "Boyle, T.C.",
                    'title' => "San Miguel",
                    'length' => 412,
                    'published_in' => 2013,
                    'finished_date' => "2015-06-03"
                ],
                [
                    'author_full_name' => "Heijden, A.F.Th.",
                    'title' => "De slag om de Blauwbrug",
                    'length' => 131,
                    'published_in' => 1983,
                    'finished_date' => "2015-04-01"
                ],
                [
                    'author_full_name' => "Terrin, Peter",
                    'title' => "Monte Carlo",
                    'length' => 174,
                    'published_in' => 2014,
                    'finished_date' => "2015-06-03"
                ],
                [
                    'author_full_name' => "Dis, Adriaan van",
                    'title' => "Ik kom terug",
                    'length' => 284,
                    'published_in' => 2014,
                    'finished_date' => "2015-06-08"
                ],
                [
                    'author_full_name' => "Peek, Gustaaf",
                    'title' => "Godin, Held",
                    'length' => 236,
                    'published_in' => 2014,
                    'finished_date' => "2015-06-16"
                ],
                [
                    'author_full_name' => "Schlink, Bernhard",
                    'title' => "Der Vorleser",
                    'length' => 206,
                    'published_in' => 1995,
                    'finished_date' => "2015-05-01"
                ],
                [
                    'author_full_name' => "Mafredi, Vallerio Massimo",
                    'title' => "De grenzen van de wereld (Alexander de Grote III)",
                    'length' => 367,
                    'published_in' => 1998,
                    'finished_date' => "2016-06-27"
                ],
                [
                    'author_full_name' => "Pratchett, Terry",
                    'title' => "Discworld 17: Interesting Times",
                    'length' => 234,
                    'published_in' => 1994,
                    'finished_date' => "2015-07-08"
                ],
                [
                    'author_full_name' => "Weijers, Niña",
                    'title' => "De consequenties.",
                    'length' => 288,
                    'published_in' => 2014,
                    'finished_date' => "2015-07-13"
                ],
                [
                    'author_full_name' => "Chirbes, Rafael",
                    'title' => "Aan de oever",
                    'length' => 432,
                    'published_in' => 2013,
                    'finished_date' => "2015-07-20"
                ],
                [
                    'author_full_name' => "Leckie, Ann",
                    'title' => "Ancillary Justice (Imperial Radch I)",
                    'length' => 297,
                    'published_in' => 2013,
                    'finished_date' => "2015-07-27"
                ],
                [
                    'author_full_name' => "Coben, Harlan",
                    'title' => "Momentopname",
                    'length' => 360,
                    'published_in' => 2012,
                    'finished_date' => "2015-08-10"
                ],
                [
                    'author_full_name' => "Hertmans, Stefan",
                    'title' => "Oorlog en terpentijn",
                    'length' => 280,
                    'published_in' => 2013,
                    'finished_date' => "2015-08-15"
                ],
                [
                    'author_full_name' => "Boose, Johan den",
                    'title' => "Gaius",
                    'length' => 319,
                    'published_in' => 2013,
                    'finished_date' => "2015-08-22"
                ],
                [
                    'author_full_name' => "Verne, Jules",
                    'title' => "Le tour du monde dans 80 jours",
                    'length' => 288,
                    'published_in' => 1873,
                    'finished_date' => "2015-08-30"
                ],
                [
                    'author_full_name' => "T.C. Boyle",
                    'title' => "The harder they come",
                    'length' => 348,
                    'published_in' => 2015,
                    'finished_date' => "2015-09-08"
                ],
                [
                    'author_full_name' => "Kemal, Yasar",
                    'title' => "Kleine Memed",
                    'length' => 411,
                    'published_in' => 1958,
                    'finished_date' => "2015-09-20"
                ],
                [
                    'author_full_name' => "Hrabal, Bohumil",
                    'title' => "Verpletterde schoonheid",
                    'length' => 415,
                    'published_in' => 2002,
                    'finished_date' => "2015-09-29"
                ],
                [
                    'author_full_name' => "Veronesi, Sandro",
                    'title' => "Kalme Chaos",
                    'length' => 415,
                    'published_in' => 2006,
                    'finished_date' => "2015-10-14"
                ],
                [
                    'author_full_name' => "Heijmans, Toine",
                    'title' => "Pristina",
                    'length' => 348,
                    'published_in' => 2014,
                    'finished_date' => "2015-10-16"
                ],
                [
                    'author_full_name' => "Verhulst, Dimitri",
                    'title' => "Kaddisj voor een kut",
                    'length' => 158,
                    'published_in' => 2014,
                    'finished_date' => "2015-10-17"
                ],
                [
                    'author_full_name' => "Nesbo, Jo",
                    'title' => "De verlosser (HH6)",
                    'length' => 348,
                    'published_in' => 2005,
                    'finished_date' => "2015-10-23"
                ],
                [
                    'author_full_name' => "Molesini, Andrea",
                    'title' => "Niet alle smeerlappen komen uit Wenen",
                    'length' => 287,
                    'published_in' => 2010,
                    'finished_date' => "2015-11-01"
                ],
                [
                    'author_full_name' => "Mankell, Henning",
                    'title' => "De jonge Wallander",
                    'length' => 356,
                    'published_in' => 1999,
                    'finished_date' => "2015-11-09"
                ],
                [
                    'author_full_name' => "Baram, Nir",
                    'title' => "Goede mensen",
                    'length' => 512,
                    'published_in' => 2010,
                    'finished_date' => "2015-11-30"
                ],
                [
                    'author_full_name' => "Heijden, A.F.Th. Van",
                    'title' => "Vallende ouders (TT1)",
                    'length' => 509,
                    'published_in' => 1983,
                    'finished_date' => "2015-12-13"
                ],
                [
                    'author_full_name' => "Hulst, Auke",
                    'title' => "Kinderen van het Ruige Land",
                    'length' => 334,
                    'published_in' => 2012,
                    'finished_date' => "2015-12-21"
                ],
                [
                    'author_full_name' => "Alexijevitsj, Svetlana",
                    'title' => "Het einde van de rode mens. Leven op de puinhopen van de Sovjet-Unie.",
                    'length' => 478,
                    'published_in' => 2014,
                    'finished_date' => "2016-01-03"
                ],
                [
                    'author_full_name' => "Brouwers, Jeroen",
                    'title' => "Het hout",
                    'length' => 229,
                    'published_in' => 2014,
                    'finished_date' => "2016-01-13"
                ],
                [
                    'author_full_name' => "Manfredi, Valerio Massimo",
                    'title' => "De talisman van Troje",
                    'length' => 334,
                    'published_in' => 1994,
                    'finished_date' => "2016-01-23"
                ],
                [
                    'author_full_name' => "Franzen, Jonathan",
                    'title' => "The corrections",
                    'length' => 568,
                    'published_in' => 2001,
                    'finished_date' => "2016-02-08"
                ],
                [
                    'author_full_name' => "Brouwers, Jeroen",
                    'title' => "Bezonken rood",
                    'length' => 125,
                    'published_in' => 1981,
                    'finished_date' => "2016-02-10"
                ],
                [
                    'author_full_name' => "Guillou, Jan",
                    'title' => "Bruggenbouwers (De Grote Eeuw 1)",
                    'length' => 520,
                    'published_in' => 2011,
                    'finished_date' => "2016-02-19"
                ],
                [
                    'author_full_name' => "Kahneman, Daniel",
                    'title' => "Thinking fast and slow",
                    'length' => 534,
                    'published_in' => 2011,
                    'finished_date' => "2016-02-21"
                ],
                [
                    'author_full_name' => "Waterdrinker, Pieter",
                    'title' => "De correspondent",
                    'length' => 292,
                    'published_in' => 2014,
                    'finished_date' => "2016-03-01"
                ],
                [
                    'author_full_name' => "Bengtsson, Frans G.",
                    'title' => "De langschepen. Avonturen van een Viking met de naam Rode Orm",
                    'length' => 574,
                    'published_in' => 1945,
                    'finished_date' => "2016-03-12"
                ],
                [
                    'author_full_name' => "Krielaars, Michel",
                    'title' => "Het brilletje van Tsjechov. Reizen door Rusland.",
                    'length' => 415,
                    'published_in' => 2014,
                    'finished_date' => "2016-03-15"
                ],
                [
                    'author_full_name' => "Heijden, A.F.Th. Van",
                    'title' => "De gevarendriehoek (Tandeloze Tijd 2)",
                    'length' => 530,
                    'published_in' => 1985,
                    'finished_date' => "2016-03-25"
                ],
                [
                    'author_full_name' => "Erpenbeck, Jenny",
                    'title' => "Een handvol sneeuw",
                    'length' => 268,
                    'published_in' => 2012,
                    'finished_date' => "2016-04-07"
                ],
                [
                    'author_full_name' => "Antunes, António Lobo",
                    'title' => "Als een brandend huis",
                    'length' => 342,
                    'published_in' => 2014,
                    'finished_date' => "2016-04-12"
                ],
                [
                    'author_full_name' => "Sjisjkin, Michaïl",
                    'title' => "Venushaar",
                    'length' => 541,
                    'published_in' => 2005,
                    'finished_date' => "2016-04-27"
                ],
                [
                    'author_full_name' => "Verhulst, Dimitri",
                    'title' => "Bloedboek",
                    'length' => 238,
                    'published_in' => 2015,
                    'finished_date' => "2016-04-30"
                ],
                [
                    'author_full_name' => "Waters, Sarah",
                    'title' => "The paying guests",
                    'length' => 600,
                    'published_in' => 2014,
                    'finished_date' => "2016-05-07"
                ],
                [
                    'author_full_name' => "Northup, Solomon",
                    'title' => "12 Years a Slave",
                    'length' => 229,
                    'published_in' => 1853,
                    'finished_date' => "2016-05-17"
                ],
                [
                    'author_full_name' => "Baker, Jo",
                    'title' => "Longbourn",
                    'length' => 448,
                    'published_in' => 2013,
                    'finished_date' => "2016-06-20"
                ],
                [
                    'author_full_name' => "Guillou, Jan",
                    'title' => "Dandy uit het noorden (De Grote Eeuw 2)",
                    'length' => 288,
                    'published_in' => 2012,
                    'finished_date' => "2016-07-03"
                ],
                [
                    'author_full_name' => "King, Stephen",
                    'title' => "Carrie",
                    'length' => 248,
                    'published_in' => 1974,
                    'finished_date' => "2016-07-08"
                ],
                [
                    'author_full_name' => "Golding, William",
                    'title' => "Lord of the Flies",
                    'length' => 225,
                    'published_in' => 1954,
                    'finished_date' => "2016-08-06"
                ],
                [
                    'author_full_name' => "Vantoortelboom, Jan",
                    'title' => "Meester Mitraillette",
                    'length' => 231,
                    'published_in' => 2014,
                    'finished_date' => "2016-08-12"
                ],
                [
                    'author_full_name' => "Pratchett, Terry",
                    'title' => "Discworld 22: The Last Continent",
                    'length' => 235,
                    'published_in' => 1998,
                    'finished_date' => "2016-08-24"
                ],
                [
                    'author_full_name' => "Grondahl, Jens Christian",
                    'title' => "Dat weet je niet",
                    'length' => 203,
                    'published_in' => 2010,
                    'finished_date' => "2016-06-05"
                ],
                [
                    'author_full_name' => "Leeuwen, Joke van",
                    'title' => "De onervarenen",
                    'length' => 237,
                    'published_in' => 2015,
                    'finished_date' => "2016-06-10"
                ],
                [
                    'author_full_name' => "Enquist, Anna",
                    'title' => "Kwartet",
                    'length' => 269,
                    'published_in' => 2014,
                    'finished_date' => "2016-09-08"
                ],
                [
                    'author_full_name' => "Nesbo, Jo",
                    'title' => "Pantserhart (Harry Hole 8)",
                    'length' => 451,
                    'published_in' => 2009,
                    'finished_date' => "2016-09-23"
                ],
                [
                    'author_full_name' => "Grjasnowa, Olga",
                    'title' => "Een Rus is iemand die van berken houdt",
                    'length' => 299,
                    'published_in' => 2012,
                    'finished_date' => "2016-09-30"
                ],
                [
                    'author_full_name' => "Fontana, Giorgio",
                    'title' => "Het geweten van Roberto Doni",
                    'length' => 223,
                    'published_in' => 2011,
                    'finished_date' => "2016-10-09"
                ],
                [
                    'author_full_name' => "Kwast, Ernest van der",
                    'title' => "De ijsmakers",
                    'length' => 304,
                    'published_in' => 2015,
                    'finished_date' => "2016-10-21"
                ],
                [
                    'author_full_name' => "Clement, Jennifer",
                    'title' => "Prayer for the Stolen",
                    'length' => 236,
                    'published_in' => 2013,
                    'finished_date' => "2016-10-27"
                ],
                [
                    'author_full_name' => "Snyder, Timothy",
                    'title' => "Bloodlands: Europe between Hitler and Stalin",
                    'length' => 556,
                    'published_in' => 2010,
                    'finished_date' => "2016-10-29"
                ],
                [
                    'author_full_name' => "Vann, David",
                    'title' => "Aquarium",
                    'length' => 266,
                    'published_in' => 2015,
                    'finished_date' => "2016-11-26"
                ],
                [
                    'author_full_name' => "Heijden, A.F.Th. Van",
                    'title' => "Advocaat van de hanen. (De tandeloze tijd 4)",
                    'length' => 613,
                    'published_in' => 1990,
                    'finished_date' => "2016-12-12"
                ],
                [
                    'author_full_name' => "Mankell, Henning",
                    'title' => "Moordenaar zonder gezicht (Wallander 1)",
                    'length' => 303,
                    'published_in' => 1991,
                    'finished_date' => "2016-12-12"
                ],
                [
                    'author_full_name' => "Schilperoord, Inge",
                    'title' => "Muidhond",
                    'length' => 221,
                    'published_in' => 2015,
                    'finished_date' => "2017-01-26"
                ],
                [
                    'author_full_name' => "Gessen, Masha",
                    'title' => "De man zonder gezicht",
                    'length' => 319,
                    'published_in' => 2012,
                    'finished_date' => "2017-01-01"
                ],
                [
                    'author_full_name' => "King, Stephen",
                    'title' => "'Salem's Lot",
                    'length' => 594,
                    'published_in' => 1975,
                    'finished_date' => "2017-01-27"
                ],
                [
                    'author_full_name' => "Regnerus, Jannie",
                    'title' => "Het lam",
                    'length' => 141,
                    'published_in' => 2013,
                    'finished_date' => "2017-02-06"
                ],
                [
                    'author_full_name' => "Herbert, Frank",
                    'title' => "The Godmakers",
                    'length' => 171,
                    'published_in' => 1972,
                    'finished_date' => "2017-03-04"
                ],
                [
                    'author_full_name' => "Guillou, Jan",
                    'title' => "Tussen rood en zwart (De grote eeuw 3)",
                    'length' => 314,
                    'published_in' => 2013,
                    'finished_date' => "2017-03-28"
                ],
                [
                    'author_full_name' => "Kieft, Ewoud",
                    'title' => "Oorlogsenthousiasme. Europa 1900-1918.",
                    'length' => 544,
                    'published_in' => 2015,
                    'finished_date' => "2017-04-16"
                ],
                [
                    'author_full_name' => "Heijne, Bas",
                    'title' => "Onbehagen. Nieuw Licht op de beschaafde mens.",
                    'length' => 94,
                    'published_in' => 2016,
                    'finished_date' => "2017-04-23"
                ],
                [
                    'author_full_name' => "Rovers, Eva",
                    'title' => "Ik kom in opstand, dus wij zijn. Nieuw Licht op verzet.",
                    'length' => 85,
                    'published_in' => 2017,
                    'finished_date' => "2017-04-26"
                ],
                [
                    'author_full_name' => "Kerangal, Maylis de",
                    'title' => "De levenden herstellen.",
                    'length' => 271,
                    'published_in' => 2015,
                    'finished_date' => "2017-04-28"
                ],
                [
                    'author_full_name' => "Steinbeck, John",
                    'title' => "The Grapes of Wrath",
                    'length' => 525,
                    'published_in' => 1939,
                    'finished_date' => "2017-06-03"
                ],
                [
                    'author_full_name' => "Simsion, Graeme",
                    'title' => "The Rosie Effect",
                    'length' => 421,
                    'published_in' => 2014,
                    'finished_date' => "2017-06-10"
                ],
                [
                    'author_full_name' => "Roth, Philip",
                    'title' => "The Plot Against America",
                    'length' => 391,
                    'published_in' => 2004,
                    'finished_date' => "2017-07-17"
                ],
                [
                    'author_full_name' => "Sapkowski, Andrzej",
                    'title' => "De Hekser. Het Bloed van de elfen.",
                    'length' => 346,
                    'published_in' => 1994,
                    'finished_date' => "2017-07-29"
                ],
                [
                    'author_full_name' => "Heijden, A.F.Th. Van der",
                    'title' => "Weerborstels (De tandeloze tijd intermezzo)",
                    'length' => 96,
                    'published_in' => 1992,
                    'finished_date' => "2017-07-29"
                ],
                [
                    'author_full_name' => "Bannerhed, Thomas",
                    'title' => "Waar de vogels vliegen.",
                    'length' => 354,
                    'published_in' => 2011,
                    'finished_date' => "2017-08-15"
                ],
                [
                    'author_full_name' => "Robben, Jaap",
                    'title' => "Birk",
                    'length' => 139,
                    'published_in' => 2014,
                    'finished_date' => "2017-08-17"
                ],
                [
                    'author_full_name' => "Echenoz, Jean",
                    'title' => 14,
                    'length' => 80,
                    'published_in' => 2012,
                    'finished_date' => "2017-08-17"
                ],
                [
                    'author_full_name' => "Kang, Han",
                    'title' => "De vegetariër",
                    'length' => 118,
                    'published_in' => 2007,
                    'finished_date' => "2017-08-18"
                ],
                [
                    'author_full_name' => "Vantoortelboom, Jan",
                    'title' => "De man die haast had",
                    'length' => 123,
                    'published_in' => 2015,
                    'finished_date' => "2017-08-19"
                ],
                [
                    'author_full_name' => "Kat, Otto de",
                    'title' => "De langste nacht",
                    'length' => 148,
                    'published_in' => 2015,
                    'finished_date' => "2017-08-21"
                ],
                [
                    'author_full_name' => "Aarts, Paul en Carolien Roelants",
                    'title' => "Saoedi-Arabië. De revolutie die nog moet komen.",
                    'length' => 190,
                    'published_in' => 2016,
                    'finished_date' => "2017-08-24"
                ],
                [
                    'author_full_name' => "Zaougui, Chams Eddine",
                    'title' => "Dictators. Een Arabische geschiedenis.",
                    'length' => 349,
                    'published_in' => 2016,
                    'finished_date' => "2017-08-27"
                ],
                [
                    'author_full_name' => "Heijden, A.F.Th van der",
                    'title' => "Het hof van barmhartigheid (De tandeloze tijd deel 3, boek 1)",
                    'length' => 683,
                    'published_in' => 1996,
                    'finished_date' => "2017-09-09"
                ],
                [
                    'author_full_name' => "Multatuli (E. Douwes Dekker)",
                    'title' => "Max Havelaar of de koffiveilingen der Nederlandsche Handelsmaatschappij.",
                    'length' => 423,
                    'published_in' => 1860,
                    'finished_date' => "2017-09-26"
                ],
                [
                    'author_full_name' => "Zonneveld, Peter (red.)",
                    'title' => "Tekst in context 9: Max Havelaar, Multatuli",
                    'length' => 84,
                    'published_in' => 2010,
                    'finished_date' => "2017-09-26"
                ],
                [
                    'author_full_name' => "Salter, James",
                    'title' => "Light Years",
                    'length' => 322,
                    'published_in' => 1975,
                    'finished_date' => "2017-10-07"
                ],
                [
                    'author_full_name' => "Sapkowski, Andrzej",
                    'title' => "De laatste wens & Het zwaard der voorzienigheid (Hekser)",
                    'length' => 707,
                    'published_in' => 1993,
                    'finished_date' => "2017-10-23"
                ],
                [
                    'author_full_name' => "Hertmans, Stefan",
                    'title' => "De bekeerlinge",
                    'length' => 318,
                    'published_in' => 2016,
                    'finished_date' => "2017-11-11"
                ],
                [
                    'author_full_name' => "Couperus, Louis",
                    'title' => "Van oude mensen en dingen die voorbijgaan",
                    'length' => 237,
                    'published_in' => 1906,
                    'finished_date' => "2017-11-21"
                ],
                [
                    'author_full_name' => "Atkinson, Kate",
                    'title' => "A God in Ruins",
                    'length' => 396,
                    'published_in' => 2015,
                    'finished_date' => "2017-12-03"
                ],
                [
                    'author_full_name' => "Thomése, P.F.",
                    'title' => "De onderwaterzwemmer",
                    'length' => 255,
                    'published_in' => 2015,
                    'finished_date' => "2017-12-11"
                ],
                [
                    'author_full_name' => "Hansen, Dörte",
                    'title' => "Het oude land",
                    'length' => 286,
                    'published_in' => 2015,
                    'finished_date' => "2017-12-13"
                ],
                [
                    'author_full_name' => "Vittorini, Elio",
                    'title' => "De rode anjer",
                    'length' => 228,
                    'published_in' => 1948,
                    'finished_date' => "2017-12-24"
                ],
                [
                    'author_full_name' => "Gulik, Robert van",
                    'title' => "De vergiftigde bruid. Rechter Tie Mysterie 1",
                    'length' => 219,
                    'published_in' => 1976,
                    'finished_date' => "2018-01-05"
                ],
                [
                    'author_full_name' => "Borderwijk, F.",
                    'title' => "Karakter: roman van zoon en vader",
                    'length' => 248,
                    'published_in' => 1938,
                    'finished_date' => "2018-01-19"
                ],
                [
                    'author_full_name' => "Hulst, Auke",
                    'title' => "En ik herinner me Titus Broederland",
                    'length' => 269,
                    'published_in' => 2016,
                    'finished_date' => "2018-01-21"
                ],
                [
                    'author_full_name' => "Dickens, Charles",
                    'title' => "A Tale of Two Cities",
                    'length' => 439,
                    'published_in' => 1859,
                    'finished_date' => "2018-02-17"
                ],
                [
                    'author_full_name' => "Hermans, W.F.",
                    'title' => "Nooit meer slapen",
                    'length' => 303,
                    'published_in' => 1966,
                    'finished_date' => "2018-02-28"
                ],
                [
                    'author_full_name' => "Pratchett, Terry",
                    'title' => "The Last Hero (Discworld 27)",
                    'length' => 117,
                    'published_in' => 2001,
                    'finished_date' => "2018-02-28"
                ],
                [
                    'author_full_name' => "Halsema, Femke",
                    'title' => "Pluche. Politieke memoires",
                    'length' => 392,
                    'published_in' => 2016,
                    'finished_date' => "2018-03-04"
                ],
                [
                    'author_full_name' => "Mulisch, Harry",
                    'title' => "Het stenen bruidsbed",
                    'length' => 183,
                    'published_in' => 1959,
                    'finished_date' => "2018-03-09"
                ],
                [
                    'author_full_name' => "Heijden, A.F.Th. Van der",
                    'title' => "Gentse Lente. Verhalen.",
                    'length' => 244,
                    'published_in' => 2008,
                    'finished_date' => "2018-03-13"
                ],
                [
                    'author_full_name' => "Langeveld, Arthur",
                    'title' => "Vertalen wat er staat",
                    'length' => 207,
                    'published_in' => 1986,
                    'finished_date' => "2018-03-15"
                ],
                [
                    'author_full_name' => "Kirino, Natsuo",
                    'title' => "Real World",
                    'length' => 152,
                    'published_in' => 2008,
                    'finished_date' => "2018-03-18"
                ],
                [
                    'author_full_name' => "Gundar-Goshen, Ayelet",
                    'title' => "Eén nacht, Markovitsj",
                    'length' => 363,
                    'published_in' => 2015,
                    'finished_date' => "2018-04-02"
                ],
                [
                    'author_full_name' => "Claus, Hugo",
                    'title' => "Het verdriet van België",
                    'length' => 716,
                    'published_in' => 1983,
                    'finished_date' => "2018-04-15"
                ],
                [
                    'author_full_name' => "Green, John",
                    'title' => "The Fault in our Stars",
                    'length' => 190,
                    'published_in' => 2012,
                    'finished_date' => "2018-04-20"
                ],
                [
                    'author_full_name' => "Mammeri, Mouloud",
                    'title' => "Het Verlaten Land",
                    'length' => 224,
                    'published_in' => 1952,
                    'finished_date' => "2018-04-29"
                ],
                [
                    'author_full_name' => "Gaines, James R.",
                    'title' => "Evening in the Palace of Reason: Bach Meets Frederick the Great in the Age of Enlightment.",
                    'length' => 294,
                    'published_in' => 2005,
                    'finished_date' => "2018-05-05"
                ],
                [
                    'author_full_name' => "Visser, Carolijn",
                    'title' => "Selma. Aan Hitler ontsnapt, gevangene van Mao.",
                    'length' => 287,
                    'published_in' => 2016,
                    'finished_date' => "2018-05-10"
                ],
                [
                    'author_full_name' => "Reve, Gerard",
                    'title' => "Nader tot U",
                    'length' => 168,
                    'published_in' => 1966,
                    'finished_date' => "2018-05-29"
                ],
                [
                    'author_full_name' => "Haasse, Hella S.",
                    'title' => "Heren van de Thee",
                    'length' => 307,
                    'published_in' => 1992,
                    'finished_date' => "2018-06-13"
                ],
                [
                    'author_full_name' => "Reza, Yasmina",
                    'title' => "Babylon",
                    'length' => 188,
                    'published_in' => 2016,
                    'finished_date' => "2018-06-14"
                ],
                [
                    'author_full_name' => "Tóibín, Colm",
                    'title' => "House of Names",
                    'length' => 263,
                    'published_in' => 2017,
                    'finished_date' => "2018-07-03"
                ],
                [
                    'author_full_name' => "Driessen, Martin Michael",
                    'title' => "De pelikaan",
                    'length' => 199,
                    'published_in' => 2017,
                    'finished_date' => "2018-07-14"
                ],
                [
                    'author_full_name' => "Atwood, Margaret",
                    'title' => "The Handmaid's Tale",
                    'length' => 308,
                    'published_in' => 1986,
                    'finished_date' => "2018-07-23"
                ],
                [
                    'author_full_name' => "Smit, Jeroen",
                    'title' => "De prooi. Blinde trots breekt ABN Amro.",
                    'length' => 471,
                    'published_in' => 2008,
                    'finished_date' => "2018-07-24"
                ],
                [
                    'author_full_name' => "Singh, Khushwant",
                    'title' => "Trein naar Pakistan",
                    'length' => 235,
                    'published_in' => 1956,
                    'finished_date' => "2018-08-01"
                ],
                [
                    'author_full_name' => "Tóibín, Colm",
                    'title' => "The Testament of Mary",
                    'length' => 104,
                    'published_in' => 2012,
                    'finished_date' => "2018-08-06"
                ],
                [
                    'author_full_name' => "Isik, Murat",
                    'title' => "Wees onzichtbaar",
                    'length' => 597,
                    'published_in' => 2017,
                    'finished_date' => "2018-08-15"
                ],
                [
                    'author_full_name' => "Tóibín, Colm",
                    'title' => "Brooklyn",
                    'length' => 252,
                    'published_in' => 2009,
                    'finished_date' => "2018-08-27"
                ],
                [
                    'author_full_name' => "Jungersen, Christian",
                    'title' => "Ik heb je zien verdwijnen",
                    'length' => 412,
                    'published_in' => 2013,
                    'finished_date' => "2018-09-27"
                ],
                [
                    'author_full_name' => "Jančar, Drago",
                    'title' => "Die nacht zag ik haar",
                    'length' => 255,
                    'published_in' => 2010,
                    'finished_date' => "2018-10-02"
                ],
                [
                    'author_full_name' => "Polak, Nina",
                    'title' => "Gebrek is een groot woord",
                    'length' => 197,
                    'published_in' => 2018,
                    'finished_date' => "2018-10-20"
                ],
                [
                    'author_full_name' => "Batuman, Elif",
                    'title' => "The Idiot",
                    'length' => 424,
                    'published_in' => 2017,
                    'finished_date' => "2018-10-24"
                ],
                [
                    'author_full_name' => "Abelsen, Peter",
                    'title' => "Een soort geluk",
                    'length' => 303,
                    'published_in' => 2018,
                    'finished_date' => "2018-10-29"
                ],
                [
                    'author_full_name' => "Malamud, Bernard",
                    'title' => "De fikser",
                    'length' => 359,
                    'published_in' => 1966,
                    'finished_date' => "2018-11-12"
                ],
                [
                    'author_full_name' => "Waterdrinker, Pieter",
                    'title' => "Tsjaikovskistraat 40. Een autobiografische vertelling uit Rusland.",
                    'length' => 431,
                    'published_in' => 2017,
                    'finished_date' => "2018-11-14"
                ],
                [
                    'author_full_name' => "Peeters, Elvis",
                    'title' => "Wij",
                    'length' => 171,
                    'published_in' => 2009,
                    'finished_date' => "2018-11-21"
                ],
                [
                    'author_full_name' => "Veelen, Arjen van",
                    'title' => "Aantekeningen over het verplaatsen van obelisken",
                    'length' => 253,
                    'published_in' => 2017,
                    'finished_date' => "2018-11-29"
                ],
                [
                    'author_full_name' => "Aischylos, Sofokles en Euripides",
                    'title' => "Eén familie, acht tragedies.",
                    'length' => 590,
                    'published_in' => 1999,
                    'finished_date' => "2018-11-29"
                ],
                [
                    'author_full_name' => "Barry, Sebastian",
                    'title' => "Dagen zonder eind",
                    'length' => 216,
                    'published_in' => 2016,
                    'finished_date' => "2018-12-07"
                ],
                [
                    'author_full_name' => "Roach, Mary",
                    'title' => "Ik ga naar Mars en neem mee. De merkwaardige wetenschap van leven in de ruimte.",
                    'length' => 383,
                    'published_in' => 2010,
                    'finished_date' => "2018-12-17"
                ],
                [
                    'author_full_name' => "Kawabata, Yasunari",
                    'title' => "Sneeuwland",
                    'length' => 152,
                    'published_in' => 1947,
                    'finished_date' => "2018-12-17"
                ],
                [
                    'author_full_name' => "Drayer, Elma",
                    'title' => "Verwende prinsesjes. Portret van de Nederlandse vrouw.",
                    'length' => 192,
                    'published_in' => 2010,
                    'finished_date' => "2018-12-23"
                ],
                [
                    'author_full_name' => "Guillou, Jan",
                    'title' => "De kop in het zand. Drie broers, twee oorlogen, één eeuw (De Grote Eeuw deel 4)",
                    'length' => 294,
                    'published_in' => 2014,
                    'finished_date' => "2018-12-28"
                ],
                [
                    'author_full_name' => "Haan, Bas",
                    'title' => "De rekening voor Rutte. De Teevendeal, het bonnetje en de politieke prijs voor leugens.",
                    'length' => 253,
                    'published_in' => 2017,
                    'finished_date' => "2019-01-07"
                ],
                [
                    'author_full_name' => "Gardam, Jane",
                    'title' => "Old Filth",
                    'length' => 267,
                    'published_in' => 2004,
                    'finished_date' => "2019-01-16"
                ],
                [
                    'author_full_name' => "Carré, John Le",
                    'title' => "The Spy who came in from the Cold",
                    'length' => 257,
                    'published_in' => 1963,
                    'finished_date' => "2019-01-19"
                ],
                [
                    'author_full_name' => "Galidi, Rodaan al-",
                    'title' => "Maanlichtmoerassen",
                    'length' => 196,
                    'published_in' => 2006,
                    'finished_date' => "2019-01-25"
                ],
                [
                    'author_full_name' => "Brontë, Emily",
                    'title' => "Wuthering Heights",
                    'length' => 279,
                    'published_in' => 1847,
                    'finished_date' => "2019-01-27"
                ],
                [
                    'author_full_name' => "Mills, Magnus",
                    'title' => "The Forensic Records Society",
                    'length' => 184,
                    'published_in' => 2017,
                    'finished_date' => "2019-02-05"
                ],
                [
                    'author_full_name' => "Weijers, Niña",
                    'title' => "De consequenties",
                    'length' => 288,
                    'published_in' => 2014,
                    'finished_date' => "2019-02-12"
                ],
                [
                    'author_full_name' => "Raspail, Jean",
                    'title' => "De ontscheping",
                    'length' => 392,
                    'published_in' => 1973,
                    'finished_date' => "2019-02-17"
                ],
                [
                    'author_full_name' => "Mansfield, Kate",
                    'title' => "The Garden Party and Other Stories",
                    'length' => 134,
                    'published_in' => 1922,
                    'finished_date' => "2019-03-03"
                ],
                [
                    'author_full_name' => "Boudier-Bakker, Ina",
                    'title' => "De straat",
                    'length' => 127,
                    'published_in' => 1924,
                    'finished_date' => "2019-03-13"
                ],
                [
                    'author_full_name' => "Cather, Willa",
                    'title' => "O Pioneers!",
                    'length' => 126,
                    'published_in' => 1913,
                    'finished_date' => "2019-04-14"
                ],
                [
                    'author_full_name' => "Gerritsen, Esther",
                    'title' => "De trooster",
                    'length' => 118,
                    'published_in' => 2018,
                    'finished_date' => "2019-04-17"
                ],
                [
                    'author_full_name' => "Corey, James S.A.",
                    'title' => "Leviathan Wakes (The Expanse 1)",
                    'length' => 582,
                    'published_in' => 2011,
                    'finished_date' => "2019-04-20"
                ],
                [
                    'author_full_name' => "Fitzgerald, Penelope",
                    'title' => "The Beginning of Spring",
                    'length' => 256,
                    'published_in' => 1989,
                    'finished_date' => "2019-05-21"
                ],
                [
                    'author_full_name' => "Dobyn, Stephen",
                    'title' => "Is Fat Bob Dead Yet?",
                    'length' => 316,
                    'published_in' => 2015,
                    'finished_date' => "2019-06-10"
                ],
                [
                    'author_full_name' => "Higashida, Naoki",
                    'title' => "Waarom ik soms op en neer spring",
                    'length' => 143,
                    'published_in' => 2007,
                    'finished_date' => "2019-06-11"
                ],
                [
                    'author_full_name' => "Heijden, A.F.Th.",
                    'title' => "Onder het plaveisel het moeras (TT3.2)",
                    'length' => 724,
                    'published_in' => 1996,
                    'finished_date' => "2019-06-15"
                ],
                [
                    'author_full_name' => "Boose, Johan De",
                    'title' => "Het vloekhout",
                    'length' => 214,
                    'published_in' => 2018,
                    'finished_date' => "2019-06-18"
                ],
                [
                    'author_full_name' => "Alderman, Naomi",
                    'title' => "De macht",
                    'length' => 440,
                    'published_in' => 2016,
                    'finished_date' => "2019-06-23"
                ],
                [
                    'author_full_name' => "Chiang, Ted",
                    'title' => "The truth of fact, the truth of feeling",
                    'length' => 32,
                    'published_in' => 2013,
                    'finished_date' => "2019-06-28"
                ],
                [
                    'author_full_name' => "Le Guin, Ursula",
                    'title' => "The ones who walk away from Omelas",
                    'length' => 26,
                    'published_in' => 1979,
                    'finished_date' => "2019-06-30"
                ],
                [
                    'author_full_name' => "Wortel, Maartje",
                    'title' => "Half mens",
                    'length' => 239,
                    'published_in' => 2011,
                    'finished_date' => "2019-07-03"
                ],
                [
                    'author_full_name' => "Guillou, Jan",
                    'title' => "Blauwe Ster. Drie broers, twee oorlogen, één eeuw (De Grote Eeuw deel 5)",
                    'length' => 352,
                    'published_in' => 2016,
                    'finished_date' => "2019-07-16"
                ],
                [
                    'author_full_name' => "Bordewijk, F.",
                    'title' => "Blokken; Knorrende beesten; Bint",
                    'length' => 198,
                    'published_in' => 1931,
                    'finished_date' => "2019-07-17"
                ],
                [
                    'author_full_name' => "Heijden, A.F.Th. Van der",
                    'title' => "De helleveeg (TT5)",
                    'length' => 244,
                    'published_in' => 2013,
                    'finished_date' => "2019-07-19"
                ],
                [
                    'author_full_name' => "Can, Sinan",
                    'title' => "De Arabische storm. Vijf jaar na de lente",
                    'length' => 213,
                    'published_in' => 2016,
                    'finished_date' => "2019-07-21"
                ],
                [
                    'author_full_name' => "Petry, Yves",
                    'title' => "De geesten",
                    'length' => 309,
                    'published_in' => 2019,
                    'finished_date' => "2019-07-24"
                ],
                [
                    'author_full_name' => "Maalouf, Amin",
                    'title' => "De ontheemden",
                    'length' => 393,
                    'published_in' => 2013,
                    'finished_date' => "2019-08-13"
                ],
                [
                    'author_full_name' => "Houellebecq, Michel",
                    'title' => "Onderworpen",
                    'length' => 225,
                    'published_in' => 2015,
                    'finished_date' => "2019-08-15"
                ],
                [
                    'author_full_name' => "Natter, Bert",
                    'title' => "Remington",
                    'length' => 174,
                    'published_in' => 2015,
                    'finished_date' => "2019-08-27"
                ],
                [
                    'author_full_name' => "Essen, Rob van",
                    'title' => "De goede zoon",
                    'length' => 340,
                    'published_in' => 2018,
                    'finished_date' => "2019-09-22"
                ],
                [
                    'author_full_name' => "Ng, Celeste",
                    'title' => "Wat ik nooit eerder heb gezegd",
                    'length' => 287,
                    'published_in' => 2014,
                    'finished_date' => "2019-10-01"
                ],
                [
                    'author_full_name' => "Porter, Max",
                    'title' => "Verdriet is het ding met veren",
                    'length' => 122,
                    'published_in' => 2015,
                    'finished_date' => "2019-10-14"
                ],
                [
                    'author_full_name' => "Shamsie, Kate",
                    'title' => "Huis in brand",
                    'length' => 252,
                    'published_in' => 2017,
                    'finished_date' => "2019-11-05"
                ],
                [
                    'author_full_name' => "Smit, Barry",
                    'title' => "Bloedwonder",
                    'length' => 144,
                    'published_in' => 2019,
                    'finished_date' => "2019-11-10"
                ],
                [
                    'author_full_name' => "Coover, Robert",
                    'title' => "Going for a Beer",
                    'length' => 416,
                    'published_in' => 2018,
                    'finished_date' => "2019-11-16"
                ],
                [
                    'author_full_name' => "Olde Heuvelt, Thomas",
                    'title' => "Hex",
                    'length' => 343,
                    'published_in' => 2013,
                    'finished_date' => "2019-11-25"
                ],
                [
                    'author_full_name' => "Barnhoorn, Nowelle",
                    'title' => "De tweelingparadox",
                    'length' => 286,
                    'published_in' => 2018,
                    'finished_date' => "2019-11-30"
                ],
                [
                    'author_full_name' => "Camus, Albert",
                    'title' => "L'étranger",
                    'length' => 186,
                    'published_in' => 1942,
                    'finished_date' => "2019-12-12"
                ],
                [
                    'author_full_name' => "Daoud, Kamel",
                    'title' => "Moussa of de dood van een Arabier",
                    'length' => 151,
                    'published_in' => 2013,
                    'finished_date' => "2019-12-21"
                ],
                [
                    'author_full_name' => "Harris, Robert",
                    'title' => "The Cicero Trilogy",
                    'length' => 1304,
                    'published_in' => 2016,
                    'finished_date' => "2019-12-26"
                ],
                [
                    'author_full_name' => "Driessen, Martin Michael",
                    'title' => "De heilige. Een schelmenroman",
                    'length' => 237,
                    'published_in' => 2019,
                    'finished_date' => "2019-12-28"
                ],
                [
                    'author_full_name' => "Wiener, L.H.",
                    'title' => "In de zee gaat niets verloren",
                    'length' => 139,
                    'published_in' => 2015,
                    'finished_date' => "2020-01-02"
                ],
                [
                    'author_full_name' => "Enter, Stephan",
                    'title' => "Compassie",
                    'length' => 112,
                    'published_in' => 2015,
                    'finished_date' => "2020-01-04"
                ],
                [
                    'author_full_name' => "Robinson, Marilynne",
                    'title' => "Lila",
                    'length' => 213,
                    'published_in' => 2015,
                    'finished_date' => "2020-01-13"
                ],
                [
                    'author_full_name' => "Guillou, Jan",
                    'title' => "Echte Amerikaanse jeans (De Grote Eeuw deel 6)",
                    'length' => 318,
                    'published_in' => 2016,
                    'finished_date' => "2020-01-23"
                ],
                [
                    'author_full_name' => "Ondaatje, Michael",
                    'title' => "Warlight",
                    'length' => 290,
                    'published_in' => 2018,
                    'finished_date' => "2020-01-26"
                ],
                [
                    'author_full_name' => "Brokken, Jan",
                    'title' => "De Kozakkentuin",
                    'length' => 349,
                    'published_in' => 2015,
                    'finished_date' => "2020-02-09"
                ],
                [
                    'author_full_name' => "Oçonnor, Joseph",
                    'title' => "De nacht is jong",
                    'length' => 354,
                    'published_in' => 2014,
                    'finished_date' => "2020-02-23"
                ],
                [
                    'author_full_name' => "Ferrante, Elena",
                    'title' => "Kwellende liefde",
                    'length' => 174,
                    'published_in' => 1992,
                    'finished_date' => "2020-03-01"
                ],
                [
                    'author_full_name' => "Smith, Gregory Blake",
                    'title' => "The maze at Windermere",
                    'length' => 339,
                    'published_in' => 2018,
                    'finished_date' => "2020-03-12"
                ],
                [
                    'author_full_name' => "Bernhard, Thomas",
                    'title' => "Op de boomgrens",
                    'length' => 83,
                    'published_in' => 1969,
                    'finished_date' => "2020-03-15"
                ],
                [
                    'author_full_name' => "Brink, H.M. Van den",
                    'title' => "Dijk",
                    'length' => 130,
                    'published_in' => 2016,
                    'finished_date' => "2020-03-18"
                ],
                [
                    'author_full_name' => "Erpenbeck, Jenny",
                    'title' => "Huishouden",
                    'length' => 173,
                    'published_in' => 2008,
                    'finished_date' => "2020-04-05"
                ],
                [
                    'author_full_name' => "Lieske, Tomas",
                    'title' => "De vrolijke verrijzenis van Arago",
                    'length' => 212,
                    'published_in' => 2018,
                    'finished_date' => "2020-04-10"
                ],
                [
                    'author_full_name' => "Corey, James S.A.",
                    'title' => "Drive (The Expanse 0.1)",
                    'length' => 22,
                    'published_in' => 2012,
                    'finished_date' => "2020-04-11"
                ],
                [
                    'author_full_name' => "Corey, James S.A.",
                    'title' => "The Churn (The Expanse 0.3)",
                    'length' => 75,
                    'published_in' => 2014,
                    'finished_date' => "2020-04-12"
                ],
                [
                    'author_full_name' => "Corey, James S.A.",
                    'title' => "The Butcher of Anderson Station (The Expans 0.5)",
                    'length' => 40,
                    'published_in' => 2011,
                    'finished_date' => "2020-04-12"
                ],
                [
                    'author_full_name' => "Corey, James S.A.",
                    'title' => "The Last Flight of the Cassandra",
                    'length' => 5,
                    'published_in' => 2019,
                    'finished_date' => "2020-04-12"
                ],
                [
                    'author_full_name' => "Corey, James S.A.",
                    'title' => "Caliban's War (The Expanse 2)",
                    'length' => 611,
                    'published_in' => 2012,
                    'finished_date' => "2020-05-17"
                ],
                [
                    'author_full_name' => "Carré, John Le",
                    'title' => "Agent Running in the Field",
                    'length' => 281,
                    'published_in' => 2019,
                    'finished_date' => "2020-06-19"
                ],
                [
                    'author_full_name' => "Knausgard, Karl Ove",
                    'title' => "Zoon (Mijn strijd 3)",
                    'length' => 345,
                    'published_in' => 2013,
                    'finished_date' => "2020-07-07"
                ],
                [
                    'author_full_name' => "Corey, James S.A.",
                    'title' => "Gods of Risk (The Expanse 2.5)",
                    'length' => 76,
                    'published_in' => 2012,
                    'finished_date' => "2020-07-20"
                ],
                [
                    'author_full_name' => "Dragomán, György",
                    'title' => "Vuurstapel",
                    'length' => 361,
                    'published_in' => 2016,
                    'finished_date' => "2020-07-31"
                ],
                [
                    'author_full_name' => "De Jong, Oek",
                    'title' => "Zwarte schuur",
                    'length' => 491,
                    'published_in' => 2019,
                    'finished_date' => "2020-08-14"
                ],
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
                ]
            )
        ]
    ];
