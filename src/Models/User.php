<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 25.06.18
 * Time: 14:31
 */

namespace App\DesignPatterns\Models;

use App\DesignPatterns\Services\CacheInterface;

class User
{
    private $email;
    private $cache;

    public function __construct($email, CacheInterface $cache)
    {
        $this->email = $email;
        $this->cache = $cache;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function createSession()
    {
        // create session
        $this->cache->set($this->email, '');
    }
}
