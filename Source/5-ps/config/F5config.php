<?php
// FILE: F5Config (part of Framework5,
// https://github.com/aleph3d/Framework5.git
// TYPE: the Master Configuration File (PHP5)
// LICENSE: MIT (Copyright 2014 Hannah Dunitz)

// Database Settings
define("dbhost","localhost");
define("dbname","F5DBpub");
define("dbuser","someuser");
define("dbpass","changeme");
define("dbprfx","F5pfx-");
//Paths
// the path to the 5-ps folder - it is a good idea to place this a level above the Web Root.
define("pathPrivate","/home/hannah/drive/5-ps/");
// the path to the public html documents folder for the WebClient domain - this is normally either:
// public_html or www (sometimes htdocs)
define("pathHTTPdocs","/home/hannah/drive/public_html/");
// DefaultLanguage
define("defLang","english_US");
// DefaultTimezone
define("deftimezone","GMT");