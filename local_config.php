<?php


/*----------------START OF LOCAL CONFIGURATION FILE------------------*/

/*
*-------------------------------------------------------------------
* TENANT SETTINGS
*------------------------------------------------------------------
* $tenant => Tenant name.
*
*/

$tenant = 'RUSI';
//$tenant = 'DUPL';

/*
*-------------------------------------------------------------------
* CONFIG
*------------------------------------------------------------------
* $base_url => Base URL of the project
*/

$base_url = 'http://192.168.33.10/'.$tenant;


/*
*-------------------------------------------------------------------
* DATABASE
*-------------------------------------------------------------------
* $hostname => Hostname
* $database => Default DB
* $username => MySql usernmae
* $password => MySql Password
*/

$hostname = 'localhost';
$database = 'ru_erp_ndn'; //<--- DEFAULT DB
$username = 'root';
$password = 'bradlee';


/*
*-------------------------------------------------------------------
* PHPMYSQLMANAGE CONFIG SETTINGS
*------------------------------------------------------------------
* $username => MySql Username
* $password => MySql password
* $downloadable_backup_dir => The Directory where the created backup is stored relative to root dir "/"
* $uploaded_backup_dir => The Directory where the backup resides after upload and ready for restore
* $tmp_backup_dir => Temporary Directory used primarily by mydumper for creating backup
* $tmp_restore_dir => Temporary Directory used primarily by mydumper for restoring backup
* $mysql_dir => MySql Directory
* $dbPrefix => Tenant's DB Prefix
*
*/
$root_dir = '/var/www/'.$tenant;


$mysql_username = 'root';
$mysql_password = 'bradlee';
$downloadable_backup_dir = $root_dir.'/dbackup';
$uploaded_backup_dir = $root_dir.'/ubackup';
$tmp_backup_dir = $root_dir.'/tmp/dbackup';
$tmp_restore_dir = $root_dir.'/tmp/ubackup';
$mysql_dir = '/var/lib/mysql';
$dbPrefix = 'ru_erp';

/*
*-------------------------------------------------------------------
* ARP SETTINGS
*------------------------------------------------------------------
* $networkInterface => The Network interface that the server this is reiquired so that arp can listen to right interface.
*
*/
$networkInterface = 'eth1';

//->TEMP ENV FUNCTION

putenv('ENVIRONMENT=development');
putenv("base_url=".$base_url);
putenv("hostname=".$hostname);
putenv("database=".$database);
putenv("username=".$username);
putenv("password=".$password);
putenv("base_url=".$base_url);
putenv("mysql_username=".$mysql_username);
putenv("mysql_password=".$mysql_password);
putenv("downloadable_backup_dir=".$root_dir."/dbackup");
putenv("uploaded_backup_dir=".$root_dir."/ubackup");
putenv("tmp_backup_dir=".$root_dir."/tmp/dbackup");
putenv("tmp_restore_dir=".$root_dir."/tmp/ubackup");
putenv("mysql_dir=/var/lib/mysql");
putenv("dbPrefix=ru_erp");
putenv("networkInterface=".$networkInterface);
putenv("tbuuid=acct,trx_ledger,geo_zone");
putenv("excluded_trx=PEN,CT,AF,PLT,EXP");


/*----------------END OF LOCAL CONFIGURATION FILE------------------*/