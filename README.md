# leesclub
A website to keep track of books you have read and books you want to read.
You can also check out what other users are reading and start a conversation in the comment section.
The wireframe is available at https://octopus.do/yxtokmk3nki.

# migration
A tough one. I used Wouter Voogt his example to integrate Toby Versteeg his migration functionality into the framework based on Jeffrey Way's PHP Practiioners.

Instead of dotenv I use config and DI Containers to bind them in Connection, queries are made in QueryBuilder.
Toby does this all in one go in MySQL.php and he uses dotenv. 
Toby's solution seems cleaner to me, but because I do not understand it completely and want to be able to fall back on the videos, I used Jeffrey Way's skeleton.
Had to do a lot of namespacing and using and added some slashes as well (PDO and PDOException). 

Warning: I have not yet tested if this works, so DO NOT MERGE this branch into main, period!

Next step: creating more routes, setting up database schemes and seeding it through migrate.php (using my seeder-Access-table, hopefully.)