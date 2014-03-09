<?php
// FILE: runMiniMediaIndexCall (part of MiniMediaEducation,
// https://github.com/aleph3d/Framework5.git
// TYPE: a file to be called to run the API of HTML5-based Server Website (PHP5)
// LICENSE: MIT (Copyright 2014 Hannah Dunitz)
proCheck() or die();
// Initialize the $itx variable which will be used globally as an all purpose
// storage array for data.
// This is a security measure because if PHP configuration settings are NOT
// Set up correctly a user can start a SESSION with internally used variables
// defined by url parameters. (more or less do nasty nasty exploits as they to
// will have access to this Open Source Framework and will for the most part
// know the code.)
if(isset($itx)) {
	$itx = (string) NULL;
	unset($itx);
}
// Include some basic libraries that are common to the Framework in general.
include(pathPrivate."lib/F5DBlib.php");
include(pathPrivate."lib/F5SYSTEMlib.php");
// Load the Language Config file based upon what default language is set.
include(pathPrivate."config/localization/".defLang."/F5lang_".deflang.".php");
// Start an Instance of the Framework5 Global Class (F5class)
$DO = new F5class();
// SESSION Security! Initialize and set a token for the Agent (browser) the user
// is currently using. If the user changes clients with the same SESSION Cookie
// stored in the server's /TMP folder, it will kill the running of the Framework
// as this DOES NOT HAPPEN unless someone is trying to run a code exploit.
$_SESSION = $DO->initSession($_SESSION);
$_SESSION = $DO->agentSession($_SESSION,$_SERVER['HTTP_USER_AGENT']);
// Load the GET Parameters into the $itx array safely.
$itx['get'] = safeGet($_GET);
// Define Global Values for Time at the time the script is ran.
define('unixtime',time());
define('prettytime',$DO->getPrettyTime(unixtime,deftimezone));
// Load the PLUGINS dependant upon GET Parameter Overrides
if(!runPlugins($itx)) { echo "The Janitor accidentally tripped and spilled the mop water on the server again, please contact an administrator"; die(); exit();}