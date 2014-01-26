<?php
//
// Configuration file for testMaker
//

// Type of database server; currently only "mysql" is supported
define('DB_TYPE', 'mysql');

// The hostname of the database server
define('DB_HOST', 'localhost');

// The database username to authenticate to
define('DB_USER', 'root');

// The database authentication password
define('DB_PASSWORD', 'developer');

// The name of the database to use
define('DB_NAME', 'tm');

// The prefix attached to testMaker's table names during installation
define('DB_PREFIX', 'tm_');

// The e-mail address to use as sender for mails sent by testMaker
define('SYSTEM_MAIL', 'ralph.delzepich@rwth-aachen.de');

// A distinctive title for this installation, e.g. "testMaker RWTH Aachen"
define('PROJECT_NAME', 'testMaker');

// The default interface language (we currently support "de" and "en")
define('DEFAULT_LANGUAGE', 'de');

// Second e-mail address, for example for test surveys
define('SYSTEM_MAIL_B', 'ralph.delzepich@rwth-aachen.de');

// The URL to the tracker for the verbose error handler (e.g. http://www.example.org/errorTracker/)
// define('ERROR_TRACKER_URL', '');

// An e-mail address that the error tracker can access
// define('ERROR_MAILS_TO', '');
