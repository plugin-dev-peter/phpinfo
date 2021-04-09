<?php
require_once 'vendor\autoload.php';
require_once dirname(__FILE__) . '/le_php-master/logentries.php';

echo $_ENV['peter_env_key'];

$log->Debug("Debugging Message");
$log->Info("Informational message");
$log->Notice("Notice Message");
$log->Warn("Warning Message");
$log->Error("Error Message");

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


$logger = new Katzgrau\KLogger\Logger(__DIR__.'/logs');
$logger->info('Returned a million search results');
$logger->error('Oh dear.');
$logger->debug('Got these users from the Database.', $users);

phpinfo();
echo 'running';
?>
