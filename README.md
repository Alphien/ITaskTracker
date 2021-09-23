# ITaskTracker

iTask list to manage daily activity and project list for each members of your Team.

Download and place the file(s) in a directory called ITaskTracker in your extensions/ folder.

Add the following code at the bottom of your LocalSettings.php:
# iTask Tracker Extension
require_once "$IP/extensions/ITaskTracker/ITaskTracker.php";
$wgCurrentDir    = dirname(__FILE__);

# ITask Permission
$wgGroupPermissions['itaskowner']['itaskowner'] = true;
$wgGroupPermissions['itaskapprover']['itaskapprover'] = true;
$wgGroupPermissions['itaskcoordinator']['itaskcoordinator'] = true;
$wgGroupPermissions['itaskarchiver']['itaskarchiver'] = true;
$wgGroupPermissions['itaskurgent']['itaskurgent'] = true;
$wgMaxUrgentTask = 5 ;
$wgMaxHighTask   = 15;
$wgMaxMediumTask = 50;
$wgMaxLowTask    = 0 ;

# create new file Local.php containing database config :
========================================================
<?php
## Database settings
$wgDBtype = "mysql";
$wgDBserver = "10.153.62.13";
$wgDBname = "ALwikiDBdev";
$wgDBuser = "usrWikiALdev";
$wgDBpassword = "523s9x2XWrsfddsGM";
 
========================================================

define file above in LocalSettings.php as per below :

require_once 'Local.php';
