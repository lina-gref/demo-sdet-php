<?php

declare(strict_types=1);

namespace Nymph\DemoSdetPhp\TestData\Users;

use GuzzleHttp\Exception\GuzzleException;

class UserGenerator
{
    private UserProviderInterface $provider;

    public function __construct(UserProviderInterface $provider)
    {
        $this->provider = $provider;
    }

    /**
     * Generate a standard user with the given name.
     *
     * @param string $name
     * @return array<string, mixed>
     * @throws GuzzleException
     */
    public function generateStandardUser(string $name): array
    {
        $userData = [
            'name'     => $name,
            'email'    => strtolower(str_replace(' ', '.', $name)) . '@example.com',
            'username' => strtolower(str_replace(' ', '_', $name)),
            'phone'    => '555-0100',
            'website'  => 'https://example.com',
        ];

        return $this->provider->createUser($userData);
    }
}
