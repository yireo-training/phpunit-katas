<?php
declare(strict_types=1);

use Yireo\KataExample\HelloWorld;

require_once __DIR__ . '/../vendor/autoload.php';

echo (new HelloWorld)->sayHello();
