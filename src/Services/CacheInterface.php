<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 25.06.18
 * Time: 14:40
 */

namespace App\DesignPatterns\Services;

interface CacheInterface
{
    public function set($key, $value);

    public function get($key);
}
