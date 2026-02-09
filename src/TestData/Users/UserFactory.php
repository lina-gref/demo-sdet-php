<?php

declare(strict_types=1);

namespace Nymph\DemoSdetPhp\TestData\Users;

use GuzzleHttp\Client;

class UserFactory
{
    /**
     * Create and return a UserProvider instance.
     *
     * @return UserProviderInterface
     */
    public static function create(): UserProviderInterface
    {
        $config = require __DIR__ . '/../../../config.php';

        $client = new Client([
            'base_uri' => $config['api_url'],
            'timeout'  => 2.0,
        ]);

        return new UserProvider($client);
    }
}
