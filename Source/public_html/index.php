<?php
// FILE: index (part of Framework5,
// https://github.com/aleph3d/Framework5.git
// TYPE: the Default Web Script (Web Accessible) (PHP5)
// LICENSE: MIT (Copyright 2014 Hannah Dunitz)

// let's set up a safety check function which will return TRUE to any
// script that is loaded by this script that calls on the function.
// (note - this prevents arbitrary script execution if other scripts are
//		in the DocumentRoot for HTTP.
function diplomacyCheck() { return TRUE; }
// First let's get the path ...
include("path.php");
// Next let's include the F5config file ...
include(pathREL."config/F5config.php");
// Next let's include the browserCALL script ...
include(pathPrivate."F5browserCALL.php");
// The rest of the magic happens in the browserCALL script :)
