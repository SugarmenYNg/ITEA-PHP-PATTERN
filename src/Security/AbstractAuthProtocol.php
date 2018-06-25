<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 25.06.18
 * Time: 14:33
 */

namespace App\DesignPatterns\Security;

abstract class AbstractAuthProtocol implements AuthProtocolInterface
{
    public function authenticate()
    {
        \var_dump(static::class . ' was called!');
    }
}
