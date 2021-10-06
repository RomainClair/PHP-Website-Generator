# A very simple static site generator using PHP

The idea is to generate a fully static website (HTML) using the flexibility of PHP's includes and variables

# How-to use it

* Identify the common HTML parts that are present on several pages and create a .php file for each one in src/parts
* Create one .php file for each page you want to have in src/pages.
You can use the page's parts created above using includes/requires.

Warning : the path to your parts file must be src/parts/<my-name>.php

* Add the new page to the bin/generate.sh script. For example if you have a home.php file to generate the home.html file, the added line should be : 
`php src/pages/home.php > home.html`
* When ready : launch your generator while in the PHP-Website-Generator directory with `bin/generate.sh`