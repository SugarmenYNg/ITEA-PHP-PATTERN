<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 25.06.18
 * Time: 14:31
 */

namespace App\DesignPatterns\Models;

class UserFactory
{
    private $pool = [];

    public function createUser($email)
    {
        if (!isset($this->pool[$email])) {
            $this->pool[$email] = new User($email);
        }

        return $this->pool[$email];
    }
}
