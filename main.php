<?php
use Com\Iesbere\Dam2\alexlliso\helloworldcomposer\Hello;
require __DIR__ . "/vendor/autoload.php";
//require __DIR__ . "/src/Hello.php";

/**
 * Created by PhpStorm.
 * User: balrog
 * Date: 6/10/15
 * Time: 19:32
 */
$greatings = new Hello();

$greatings->sayHello();