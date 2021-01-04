# leesclub
A website to keep track of books you have read and books you want to read.
You can also check out what other users are reading and start a conversation in the comment section.
The wireframe is available at https://octopus.do/yxtokmk3nki.

Follow these steps to get Leesclub up and running on your own machine:

1. Open your Terminal.
2. Go to the directory you want to clone my project into.
3. Type "git clone https://github.com/JorritBosma/leesclub" and hit enter. This will create a directory 'leesclub' with all the necessary project files.
4. Open up this folder in VSCode or another code editor.
5. Create a .env-file, copy the contents of .env.example into it and fill in the blanks (db-user and -password). This makes it possible to create a local database. Make sure the db-user has enough rights to create, insert, update and delete. When in doubt, you can use the root-user.
6. In Terminal run this command: "composer install". This will install all the necessary packages and dependencies into your local vendor-directory.
7. Start up a server using "php -S localhost:8080" (or another port number), or use Valet if you prefer that.
8. You're good to go! Visit localhost:8080 in your browser (or use Valet) and enjoy Leesclub.

If you have any feedback on this project, whether you like it or you see room for improvement or or you found some bugs, please send me an email on bosma.jorrit@gmail.com. I value your feedback and will send you a repsonse.
