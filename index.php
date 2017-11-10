<?php

namespace Shutt;

require "vendor/autoload.php";

use ShuttFW\Config;
use ShuttFW\Functions\Helpers;
use ShuttFW\Functions\Router;

$define = new Config();
$helpers = new Helpers();
$router = new Router($helpers);
