<?php
/**
 * This is a sample config file that needs to be saved somewhere that your PHP
 * program can access but apache (or other webserver) can not. You will need
 * to reference this file in the index file of the imree program
 * @author Jason Steelman <uscart@gmail.com>
 * 
 */


/**
 * Placing this file
 * by default, this file wants to placed immediately below the imree index file 
 * so that from within the index file "../config.php" will point to this file
 */


/**
 * Database settings
 * These settings point a database that has aleady been setup using setup.sql
 */

$imree_database_dsn = "mysql:host=localhost;dbname=testdb";
$imree_database_username = "username";
$imree_database_password = "password";
