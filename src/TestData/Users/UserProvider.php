<?php

declare(strict_types=1);

namespace Nymph\DemoSdetPhp\TestData\Users;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class UserProvider implements UserProviderInterface
{
    private Client $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Fetch all users from the API.
     *
     * @return array<int, array>
     * @throws GuzzleException
     */
    public function fetchUsers(): array
    {
        $response = $this->client->request('GET', '/users');
        $body = $response->getBody()->getContents();
        $users = json_decode($body, true);

        if (!is_array($users)) {
            return [];
        }

        return $users;
    }

    /**
     * Create a new user via the API.
     *
     * @param array<string, mixed> $data
     * @return array<string, mixed>
     * @throws GuzzleException
     */
    public function createUser(array $data): array
    {
        $response = $this->client->request('POST', '/users', [
            'json' => $data,
        ]);

        $body = $response->getBody()->getContents();
        $user = json_decode($body, true);

        if (!is_array($user)) {
            return [];
        }

        return $user;
    }
}
