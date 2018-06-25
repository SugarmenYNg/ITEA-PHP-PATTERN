<?php
/**
 * Created by PhpStorm.
 * User: yuriy
 * Date: 21.06.18
 * Time: 20:22
 */

use App\DesignPatterns\Collection\ArrayCollection;
use App\DesignPatterns\Database\SqlQueryBuilder;
use App\DesignPatterns\Models\User;
use App\DesignPatterns\Models\UserFactory;
use App\DesignPatterns\Security\AuthProtocolStaticFactory;
use App\DesignPatterns\Services\InMemoryCache;
use App\DesignPatterns\Services\NullCache;

require_once __DIR__ . '/../vendor/autoload.php';

//$v1 = AuthProtocolStaticFactory::factory('AUTH-V1');
//$v1->authenticate();
//
//$v2 = AuthProtocolStaticFactory::factory('AUTH-V2');
//$v2->authenticate();

//$queryBuilder = new SqlQueryBuilder();
//$query = $queryBuilder->select('id, first_name, created_at')
//    ->from('user')
//    ->where('nickname = vasya')
//    ->getQuery();
//
//\var_dump($query);

//$userFactory = new UserFactory();
//$userFactory->createUser('tester1@example.com');
//$userFactory->createUser('tester2@example.com');
//$userFactory->createUser('tester1@example.com');

//$cache = new InMemoryCache();
//$cache = new NullCache();
//$user = new User('tester1@example.com', $cache);

$collection = new ArrayCollection(['PHP', 'JavaScript', 'C++', 'C', 'GoLang']);

foreach ($collection as $value) {
    \var_dump($value);
}

\var_dump(\count($collection));

\var_dump($collection[2]);
$collection[2] = 'C#';
\var_dump($collection[2]);