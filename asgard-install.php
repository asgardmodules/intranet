<?php
require_once 'paths.php';
require _CORE_DIR_.'core.php';
\Asgard\Core\App::loadDefaultApp();

\Asgard\Utils\FileManager::copy(__DIR__.'/app/intranet', _DIR_.'app/intranet');
\Asgard\Utils\FileManager::copy(__DIR__.'/web/intranet', _DIR_.'web/intranet');

\Asgard\Orm\MigrationsManager::addMigrationFile(__DIR__.'/migrations/Intranet.php');
\Asgard\Orm\MigrationsManager::migrate('Intranet');
