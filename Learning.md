# Learning logbook
In this file I will keep track of what I did and learned in the subsequent branches.
Also I will address remaining issues and/or wishes.

# skeleton
I will set up the basic structure of my file, using Jeffrey Way's skeleton from PHP Practicioners and Toby Versteeg's skeleton from CodeGorilla as examples. Toby's skeleton looks different, for instance the database connection seems to be made in Libraries MySql.php and not in Database Connection.php. I might use Toby's skeleton to add in extra functionality, like Migrate. That code is far above my paygrade right now but during testing it is very handy to migrate database (seeding structure and content, building it up again). For now I just leave it. Next step: setting up my routes, controllers and views.

# routes
Added basic routes and created all the necessary controllers and views. I am still wondering how to create login but will learn it tomorrow in a FAQ-session. Also, update should render the book.view or the user.view, but the form should be prepopulated with existing data. I forgot how to do this, did it once in express already. Another point would be the 'read' boolean. This is important for the books-view to show the list of read books or the wishlist. A book on the wishlist can be updated to read, but then more fields in the form will be required. Will figure that stuff out when I get there.

Next branch: bookmodel. Creating my books-model and seeds-file from Access-database.

After that high on my list are basic styling, flash-Plastic brain, CRUD-functionality for books, Usermodel, Register-functionality, Login-functionality, the Wishlist-Problem and fun stuff like randomizer, comments-functionality, user statistics (number of books/pages read overall, per month, favorite writer, etc etc).

# migration
A tough one. I used Wouter Voogt his example to integrate Toby Versteeg his migration functionality into the framework based on Jeffrey Way's PHP Practiioners.

Instead of dotenv I use config and DI Containers to bind them in Connection, queries are made in QueryBuilder. Toby does this all in one go in MySQL.php and he uses dotenv. Toby's solution seems cleaner to me, but because I do not understand it completely and want to be able to fall back on the videos, I used Jeffrey Way's skeleton. Had to do a lot of namespacing and using and added some slashes as well (PDO and PDOException).

Warning: I have not yet tested if this works, so DO NOT MERGE this branch into main, period!

Next step: creating more routes, setting up database schemes and seeding it through migrate.php (using my seeder-Access-table, hopefully.)

# bookseeder
This took more time than expected, but I finally succeeded in converting my Access2010 database 'Gelezen boeken' to a nice seeder-file. Had to change all the column-names (no captilas, no spaces, underscores), Toby helped me point that out. Also found an issue with Turkish chars, so changed the CHARSET from latin1 to utf-8. Refinement would be to ask for the first name and last name from the author, but that will take some time to adjust my seeds so for now I leave it. Will tweak the model anyway according to needs along the way, there are more important steps first.

# skeleton-toby
I need more functionality and will integrate it in this branch.
I want to rebuild my skeleton so I can use the handy functions in MySql for my CRUD-actions.
On the one hand: I lost a lot of time: why not use Toby's skeleton in the first place.
On the other hand: I have a much deeper understanding of the skeleton now which will help me a lot using it and building on it.

# styling-101
Adding basic styling (bootstrap containers, some colors, navbar) so it doesn't look so ugly anymore while developing. Final styling will follow if I have the time or when needed.
Also I updated View.php (to the write path App/Views and to auto-include .view as well) and used it in the controllers to render/redirect, calling on the right methods now.

# login
Working on login. Struggling a lot with Bootstrap/CSS to position and lay-out the form.
Wondering if I can do a simple post using action="/register" or if I have to use the complicated Jquery-logic for the ajax-post (Toby skeleton).
It is not finished yet - the form needs more fields (city/birthday/bio) and styling. It does submit to database already.