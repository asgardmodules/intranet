<?php
require_once 'paths.php';
require_once _VENDOR_DIR_.'autoload.php'; #composer autoloader
\Asgard\Core\App::loadDefaultApp();

\Asgard\Utils\FileManager::copy(__DIR__.'/app/intranet', _DIR_.'app/intranet');
\Asgard\Utils\FileManager::copy(__DIR__.'/web/intranet', _DIR_.'web/intranet');

\Asgard\Orm\Libs\MigrationsManager::addMigrationFile(__DIR__.'/migrations/Intranet.php');
\Asgard\Orm\Libs\MigrationsManager::migrate('Intranet');
