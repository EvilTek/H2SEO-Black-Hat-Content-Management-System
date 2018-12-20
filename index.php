<?php
/*
H₂SEO Black Hat Content Management System
http://www.h2seo.net/
I've tried to make this as easy and simple as possible and
to increase page loading speed you should delete all of the comments.
Always keep a backup of the original files.
*/

// Set The Plugins Directory
//$plugins = dir('plugins/');

// LOAD THE HEADER
require('inc/header.php');

// HERE IS WHERE WE PICK A RANDOM PAGE TITLE FROM THE PAGETITLES FILE
require('plugins/random-titles/random-titles');

//CREATE THE NAVIGATION MENU
require('src/default-menu');

// HEADLINES LINKS AND CONTENT
require('plugins/random-headlines/random-headlines');
require('content/content');
require('plugins/keyword-link-tables/keyword-link-tables');
require('plugins/random-headlines/random-headlines');
require('content/content');
require('plugins/keyword-link-tables/keyword-link-tables');
require('plugins/random-headlines/random-headlines');
require('content/content');
require('plugins/keyword-link-tables/keyword-link-tables');
require('plugins/random-headlines/random-headlines');
require('content/content');
require('plugins/keyword-link-tables/keyword-link-tables');

// GENERATE RANDOM BANNERS
require('plugins/random-banners/random-banners');

// GENERATE THE FOOTER
require('inc/footer.php');
 ?>
