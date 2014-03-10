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
// Secrets - Shhhhhhhhhhhhhh! Top Secret and Stuff (Don't share!!!)
// Change the values of these IMPORTANT!
define("secretPUBLIC","f338aea0-a838-11e3-a5e2-0800200c9a66");
define("secretPRIVATE","01adb390-a839-11e3-a5e2-0800200c9a66");
define("secretLocalSALT","0bce0460-a839-11e3-a5e2-0800200c9a66");
// Server Mode
// Currently Five Modes are Supported:
// MASTER,NODE,SLAVE,CLIENT
// MASTER - This server will act as a central authentication/distribution
//	 server for a network of servers.
// NODE - This server is running a process instance of the MASTER server
//	 on a seperate server.
// SLAVE - This server is an application server running applications
// 	 served by the MASTER server
// CLIENT - This server is a CLIENT WebAPI connected to the MASTER
// 	 Server's Network.
// STANDALONE - This server runs ALL OTHER MODES on one server and is
//	 it's own self contained mini-network. (Works with Cloud Servers)
define("serverMode","STANDALONE");
