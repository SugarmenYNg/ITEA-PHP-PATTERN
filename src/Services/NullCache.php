<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 25.06.18
 * Time: 14:41
 */

namespace App\DesignPatterns\Services;
class NullCache implements CacheInterface
{
    public function set($key, $value)
    {
    }
    public function get($key)
    {
    }
}
