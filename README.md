# Address Book

#### Allows user to create an address book, 02.12.16

#### By Marika Allely

## Description
This application allows users to create and delete contacts.  On the home page, there are some preexisting contacts.  The user then has the option to add or delete contacts.  Adding a contact takes the user to the 'contact created' page, then back to home where the new contact is displayed.  The delete button directs them to a page where it informs them that all their contacts have been deleted, then they are taken home again.


## Setup/Installation Requirements

* Clone to your desktop
* Open terminal and run the command 'composer install' in the address_book folder
* In the terminal, change directories to the web folder, run the command 'php -S localhost:8000' to run your local server
* Open browser and navigate to http://localhost8000
* Must be connected to the internet for bootstrap and images to render

## Known Bugs
The deleteAll() function is irreversible, unless you clear your cookies.  So be extra doubleplus sure.  But it might be a good idea to clear your cookies anyways.

Also the deleteAll function creates an empty contact that kinda just hangs out even after actual contacts are added but whatever.

## Support and contact details

Email me at mballely@gmail.com

## Technologies Used

This program uses HTML, CSS, Bootstrap, PHP, Silex, and Twig

### License

This software is licensed under the MIT license

Copyright (c) 2016 Marika Allely
