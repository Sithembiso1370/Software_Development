<?php
// Our front controller is our index.php file. The first thing we should do is call
// session_start, as this needs to be done before anything is sent to the browser,
// so by calling it first, we know this will be the case.
session_start();


// We should also define a framework path constant, so if we are in another file
// elsewhere, and we need to access a file relative to the framework path, we can
// use this constant. Overuse of constants isn't recommended, however, and we
// are only going to use them on occasions where appropriate.
DEFINE("FRAMEWORK_PATH", dirname( __FILE__ ) ."/" );

// Next, we need to build our registry, and tell it which objects to create. As you can
// see, the authenticate object is commented out, until we discuss this in Chapter 3.

require('registry/registry.class.php');
$registry = new Registry();
// setup our core registry objects
$registry->createAndStoreObject( 'template', 'template' );
$registry->createAndStoreObject( 'mysqldb', 'db' );
//$registry->createAndStoreObject( 'authenticate', 'authenticate' );
$registry->createAndStoreObject( 'urlprocessor', 'url' );


// Next, we can include our configuration file, and connect to the database.
// database settings
include(FRAMEWORK_PATH . 'config.php');
// create a database connection
$registry->getObject('db')->newConnection( $configs['db_host_sn'],$configs['db_user_sn'], $configs['db_pass_sn'],$configs['db_name_sn']);

// Now that we are connected to the database, we can look up any settings we have
// in a suitable settings table, and store them in our registries settings array. This
// should be for things like: administrators notification e-mail address, default view,
// if certain features are enabled, and any API keys that we may need if we connect
// to third-party services.

// store settings in our registry
$settingsSQL = "SELECT `key`, `value` FROM settings";
$registry->getObject('db')->executeQuery( $settingsSQL );
while( $setting = $registry->getObject('db')->getRows() )
{
$registry->storeSetting( $setting['value'], $setting['key'] );
}


// The next stage would be to check if the user is logged in, build the default template,
// and include the appropriate controller. We don't have any controllers at the moment,
// and we haven't discussed how our models and controllers will work, so we will
// leave those commented out for now, and return to them in Chapter 3.
// process authentication
// coming in chapter 3
/**
* Once we have some template files, we can build a default template
*$registry->getObject('template')->buildFromTemplates('header.tpl.php',
*'main.tpl.php', 'footer.tpl.php');
*$registry->getObject('template')->parseOutput();
*print $registry->getObject('template')->getPage()-
*>getContentToPrint();
*/
?>