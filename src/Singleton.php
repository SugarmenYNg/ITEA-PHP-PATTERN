<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 21.06.18
 * Time: 20:23
 */

namespace App\DesignPatterns;

final class Singleton
{
    private static $instance;

    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function __toString()
    {
        return 'Object ID: ' . \spl_object_id($this) . \PHP_EOL;
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}

$s1 = Singleton::getInstance();
echo $s1;

$s2 = Singleton::getInstance();
echo $s2;

//$s3 = clone $s2;
//echo $s3;

$s4 = \serialize($s1);
$s4 = \unserialize($s4);
echo $s4;

