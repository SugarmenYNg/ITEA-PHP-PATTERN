<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 25.06.18
 * Time: 14:34
 */

namespace App\DesignPatterns\Security;

final class AuthProtocolStaticFactory
{
    public static function factory($version)
    {
        switch ($version) {
            case AuthProtocolV1::TYPE:
                return new AuthProtocolV1();
            case AuthProtocolV2::TYPE:
                return new AuthProtocolV2();
        }

        throw new \LogicException('Unknown auth protocol');
    }

    // Abstract factory
    public function createAuthProtocolV1()
    {
        return new AuthProtocolV1();
    }

    public function createAuthProtocolV2()
    {
        return new AuthProtocolV2();
    }
}
