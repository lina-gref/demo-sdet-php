<?php

declare(strict_types=1);

namespace Nymph\DemoSdetPhp\TestData\Users;

interface UserProviderInterface
{
    /**
     * Fetch all users from the API.
     *
     * @return array<int, array>
     */
    public function fetchUsers(): array;

    /**
     * Create a new user via the API.
     *
     * @param array<string, mixed> $data
     * @return array<string, mixed>
     */
    public function createUser(array $data): array;
}
