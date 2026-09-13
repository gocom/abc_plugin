<?php

\chdir(\dirname(__DIR__));
\ini_set('memory_limit', '512M');
\error_reporting(E_ALL);

require './vendor/antecedent/patchwork/Patchwork.php';
require './vendor/autoload.php';

require './src/Abc/Example.php';
