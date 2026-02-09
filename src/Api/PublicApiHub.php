<?php

declare(strict_types=1);

namespace Nymph\DemoSdetPhp\Api;

use Nymph\DemoSdetPhp\TestData\Users\UserProviderInterface;

class PublicApiHub
{
    private UserProviderInterface $userProvider;

    public function __construct(UserProviderInterface $userProvider)
    {
        $this->userProvider = $userProvider;
    }

    /**
     * Get the user provider.
     *
     * @return UserProviderInterface
     */
    public function users(): UserProviderInterface
    {
        return $this->userProvider;
    }
}
