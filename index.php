<?php
require_once 'vendor/autoload.php';
//require_once 'vendor/autoload.php';
require_once dirname(__FILE__).'/log4php/Logger.php';
Logger::configure(dirname(__FILE__).'/resources/appender_console.properties');

$logger2 = Logger::getRootLogger();
$logger2->debug("Hello World - log4j!");

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
//require_once dirname(__FILE__) . '/le_php-master/logentries.php';

echo $_ENV['peter_env_key'];

// $log->Debug("Debugging Message");
// $log->Info("Informational message");
// $log->Notice("Notice Message");
// $log->Warn("Warning Message");
// $log->Error("Error Message");

$users = [
    [
        'name' => 'Kenny Katzgrau',
        'username' => 'katzgrau',
    ],
    [
        'name' => 'Dan Horrigan',
        'username' => 'dhrrgn',
    ],
];




//$logger = new Katzgrau\KLogger\Logger(__DIR__.'/logs');

/*
$log = new Logger('name');
$log->pushHandler(new StreamHandler(__DIR__.'/your.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
*/
$logger = new Logger('name');
//$logger->pushHandler(new \Monolog\Handler\ErrorLogHandler());
$logger->pushHandler(new StreamHandler('php://stdout', Logger::WARNING)); 


$logger->error("Something happened");

$ECWID_PROFILE =  $_ENV['ECWID_PROFILE'];
if( !$ECWID_PROFILE ) {
  //load from local file
  $local_config_file = dirname(__FILE__).'/application.properties';
  $raw_content = file_get_contents($local_config_file);
} else {
  $raw_content = $ECWID_PROFILE;
}

$parsed_content = json_decode($raw_content, true);

var_dump($parsed_content);


phpinfo();
echo 'running';
?>
