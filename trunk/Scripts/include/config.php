<?php
//
// Configration file
//
//
//

// Please set this hepler script URL and directory
if (!defined('ENV_HELPER_URL'))  define('ENV_HELPER_URL',  'http://www.nsl.tuis.ac.jp/currency/helper/');
if (!defined('ENV_HELPER_PATH')) define('ENV_HELPER_PATH', '/home/apache/htdocs/currency/helper/');


//////////////////////////////////////////////////////////////////////////////////i
// Valiables for OpenSim

// Please set MySQL DB access information
define('OPENSIM_DB_HOST',	  'star-light.nsl.tuis.ac.jp');
define('OPENSIM_DB_NAME',	  'aurora_grid');
define('OPENSIM_DB_USER',	  'aurora_user');
define('OPENSIM_DB_PASS',	  'aurora_pass');


// Please set same key with in OpenSim.ini and set user(robust) server's URL
define('CURRENCY_SCRIPT_KEY', '123456789');
define('USER_SERVER_URI',     'http://star-light.nsl.tuis.ac.jp:8002/');	// not use localhost or 127.0.0.1




//////////////////////////////////////////////////////////////////////////////////
// You need not change the below usually. 

define('USE_CURRENCY_SERVER', 1);
define('USE_UTC_TIME',		  1);

define('SYSURL', ENV_HELPER_URL);
$GLOBALS['xmlrpc_internalencoding'] = 'UTF-8';

if (USE_UTC_TIME) date_default_timezone_set('UTC');


// Currency DB
define('CURRENCY_DB_HOST',	OPENSIM_DB_HOST);
define('CURRENCY_DB_NAME',	OPENSIM_DB_NAME);
define('CURRENCY_DB_USER',	OPENSIM_DB_USER);
define('CURRENCY_DB_PASS',	OPENSIM_DB_PASS);

define('CURRENCY_MONEY_TBL',	   'balances');
define('CURRENCY_TRANSACTION_TBL', 'transactions');


//
if (!defined('ENV_READED_CONFIG')) define('ENV_READED_CONFIG', 'YES');

?>
