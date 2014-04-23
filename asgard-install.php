<?php
require __DIR__.'/../utils/FileManager.php';

\Asgard\Utils\FileManager::copy(__DIR__.'/app/intranet', 'app/intranet');
\Asgard\Utils\FileManager::copy(__DIR__.'/web/intranet', 'web/intranet');