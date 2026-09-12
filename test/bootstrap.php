<?php

\chdir(\dirname(__DIR__));
\ini_set('memory_limit', '512M');
\error_reporting(E_ALL);

require './vendor/autoload.php';
require './vendor/antecedent/patchwork/Patchwork.php';
require './test/double/functions.php';

require './src/Abc/Example.php';
